# Social Feed Integration Design

Status: approved 2026-11-18
Scope: Instagram feed on News page, Threads and LinkedIn feeds on Career page.

## Goal

Latest Instagram posts appear on the News page automatically. Latest Threads and LinkedIn
posts appear on the Career page. LinkedIn posts are managed from the admin panel without
code changes or deployments.

## Non-goals

- LinkedIn native API (requires Marketing Developer Platform approval).
- Instagram stories and highlights.
- Migrating Instagram posts into the Blog content model.
- OAuth for Threads. The Threads token is pasted once and refreshed by a scheduled command.

## Decisions

### Instagram

Use `justbetter/laravel-instagram-feed` v1.1.2 (installed). It targets the current Instagram
API with Instagram Login (`instagram_business_basic` scope), provides the OAuth connect flow,
stores profile and token in the database, and ships refresh commands.

- Source account: `raya.konstruksi`.
- OAuth callback: `/instagram/auth/callback` (registered by the package).
- Feed cache: the package caches the last fetched feed permanently. A 30 minute stale check
  in `InstagramFeedService` refreshes it on page views when the scheduler is not running.
- Token refresh: `instagram-feed:refresh-tokens` daily.
- Feed refresh: `instagram-feed:refresh 12` every 30 minutes.
- Admin entry point: Filament page "Instagram Feed" under Content Management, with a
  Connect Instagram button.

### Threads

Custom service calling `graph.threads.net/v1.0/me/threads` (fields: id, media_type,
media_url, thumbnail_url, permalink, text, timestamp).

- Token resolution: `settings.threads.access_token`, falling back to
  `config('services.threads.access_token')`.
- Token refresh: `graph.threads.net/refresh_access_token` (`th_refresh_token`), persisted
  into the settings table by `social:refresh-threads-token` daily.
- Feed cache: 30 minutes, plus a last-good copy kept for 7 days so the section survives API
  failures.
- Empty or failing feed hides the section. No broken UI.

### LinkedIn

Official LinkedIn embed URLs stored in the `linkedin_posts` table (url, order, is_active),
managed through Filament "LinkedIn Posts". The Career page renders them in the existing
Swiper slider. A visible/public post is required for the iframe to render.

### Data flow

1. Scheduler (or the lazy fallback on page view) refreshes Instagram and Threads caches.
2. `FrontController@news` passes `instagramPosts` (normalized array) to `1news`.
3. `FrontController@career` passes `linkedinPosts` (URL strings) and `threadsPosts`
   (normalized array) to `1career`.
4. Vue renders cards that link back to the original platform post.

### Error handling

- Instagram: package returns an empty feed on API errors. The service keeps the package cache
  untouched on failed refresh. Section hides when empty.
- Threads: failed request serves last-good cache. Section hides when both are empty.
- LinkedIn: the resource validates that the URL is a valid URL. Operators paste the embed URL
  from the post menu.

### Caching summary

| Feed | Fresh TTL | Fallback | Invalidated by |
| --- | --- | --- | --- |
| Instagram | 30 minutes (lazy check) | Package cache until next success | Successful refresh |
| Threads | 30 minutes | 7 day last-good copy | Successful refresh |
| LinkedIn | 1 hour | Database query | Model saved or deleted |

### Testing

- Pest feature tests with `Http::fake` for Threads.
- Inertia assertions for page props.
- Instagram service test for the not-connected path.
- Browser check on `/news-n-event` and `/careers` at desktop and mobile widths, with sample
  data seeded through tinker.
- Tests run on SQLite in memory. They must never run against the development MySQL database.

### Operational setup (manual, one time)

1. Instagram account `raya.konstruksi` must be Professional and linked to a Facebook Page.
2. Create a Meta app with the Instagram product (Instagram API with Instagram Login).
   Add redirect URI `https://rayakonstruksi.com/instagram/auth/callback`.
   Copy the Instagram App ID and App Secret into `INSTAGRAM_CLIENT_ID` and
   `INSTAGRAM_CLIENT_SECRET`.
3. Add the Threads API product, generate a long-lived token for the Threads account, paste it
   into `THREADS_ACCESS_TOKEN`.
4. Optional cron: `* * * * * cd /home/rayakonstruksi/public_html/raya-konstruksi && /usr/local/bin/php artisan schedule:run`.
5. Log in to `/rk130718`, open Content Management > Instagram Feed, click Connect Instagram.

### Risks

- The package hardcodes Graph API `v21.0`. Meta retires versions after roughly two years.
  If the feed fails with an unsupported version error, bump the constant in a fork.
- Threads token refresh depends on the daily command or the lazy path. A revoked token
  requires a new token pasted into `.env`.
- LinkedIn iframes show a login wall for posts that are not public.

## Constraints

- No em dashes in user-facing copy.
- No new JavaScript dependencies.
- Tokens are never committed. They live in `.env` or the settings table.
- `npm run build` and deployment are gated on explicit user approval.
