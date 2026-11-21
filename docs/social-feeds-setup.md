# Social Links

The Careers and News pages link out to social media instead of pulling posts through APIs.
Nothing needs to be configured on the server: no Meta app, no tokens, no cron.

| Platform  | Page    | Link                                                              |
| --------- | ------- | ----------------------------------------------------------------- |
| Instagram | News    | https://www.instagram.com/raya.konstruksi                         |
| Threads   | Careers | https://www.threads.net/@raya.konstruksi                          |
| LinkedIn  | Careers | https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all |

To change a link, edit the corresponding panel in:

- `resources/js/Pages/1news.vue` (Instagram)
- `resources/js/Pages/1career.vue` (Threads and LinkedIn)

Posts made on social media do not appear on the site automatically. If automatic feeds are
wanted later, Instagram and Threads need a Meta app plus an access token.
