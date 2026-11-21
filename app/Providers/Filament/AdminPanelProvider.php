<?php

namespace App\Providers\Filament;

use Filament\FontProviders\LocalFontProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('rk130718')
            ->login()
            ->brandName('Raya Konstruksi')
            ->brandLogo(asset('assets/img/logo-raya-polos.webp'))
            ->brandLogoHeight('2.5rem')
            ->favicon(asset('assets/img/logo-raya-polos.webp'))
            ->font('Poppins', url: asset('assets/css/filament-poppins.css'), provider: LocalFontProvider::class)
            ->sidebarCollapsibleOnDesktop()
            ->spa()
            ->colors([
                'primary' => '#1b2f6e', // Dark Blue
                'gray' => Color::Slate,
                'info' => '#F1A52B', // Gold
            ])
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): string => Blade::render('
                    <style>
                        /* Universal Dashboard Background Overlay */
                        .fi-main {
                            background-color: #f8fafc !important;
                            background-image: radial-gradient(circle at top right, rgba(241, 165, 43, 0.05), transparent 400px), radial-gradient(circle at bottom left, rgba(27, 47, 110, 0.05), transparent 400px) !important;
                        }
                        
                        /* Fix topbar glassmorphism */
                        .fi-topbar {
                            background: rgba(255, 255, 255, 0.8) !important;
                            backdrop-filter: blur(12px) !important;
                            -webkit-backdrop-filter: blur(12px) !important;
                            border-bottom: 1px solid rgba(0,0,0,0.05) !important;
                            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02) !important;
                        }
                    </style>
                    
                    @if(request()->routeIs(\'filament.admin.auth.login\'))
                    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset(\'/assets/font/Poppins/poppins-latin-400-normal.woff2\') }}">
                    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset(\'/assets/font/Poppins/poppins-latin-600-normal.woff2\') }}">
                    <style>
                        body {
                            background-color: #0f172a !important;
                            background-image: radial-gradient(circle at 15% 10%, #1b2f6e 0%, #121c3d 45%, #0b1220 100%) !important;
                            background-attachment: fixed !important;
                        }
                        .fi-simple-main {
                            background: rgba(255, 255, 255, 0.04) !important;
                            border: 1px solid rgba(255, 255, 255, 0.1) !important;
                            border-radius: 1.5rem !important;
                            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important;
                        }
                        .fi-simple-main h1,
                        .fi-simple-main h2, 
                        .fi-simple-main p, 
                        .fi-simple-main label, 
                        .fi-simple-main span {
                            color: #ffffff !important;
                        }
                        .fi-simple-main .fi-logo {
                            filter: brightness(0) invert(1);
                            opacity: 0.95;
                        }
                        .fi-simple-main .fi-input-wrp {
                            background: rgba(255, 255, 255, 0.06) !important;
                            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.18) !important;
                        }
                        .fi-simple-main .fi-input {
                            background: transparent !important;
                            border: none !important;
                            color: #ffffff !important;
                        }
                        .fi-simple-main .fi-input:focus {
                            box-shadow: 0 0 0 1px #CAD0E0 !important;
                        }
                        .fi-simple-main .fi-input-wrp-suffix {
                            background: transparent !important;
                            border-inline-start-color: rgba(255, 255, 255, 0.15) !important;
                        }
                        .fi-simple-main .fi-input-wrp-suffix .fi-icon-btn {
                            background: transparent !important;
                            color: #cbd5e1 !important;
                        }
                        .fi-simple-main .fi-checkbox-input {
                            background: rgba(255, 255, 255, 0.12) !important;
                            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.3) !important;
                        }
                        .fi-btn-primary {
                            background-color: #0c00b1ff !important;
                            color: #1b2f6e !important;
                            font-weight: 800 !important;
                            transition: all 0.3s ease !important;
                        }
                        .fi-btn-primary:hover {
                            background-color: #0c00b1ff !important;
                            transform: translateY(-2px);
                            box-shadow: 0 10px 15px -3px rgba(31, 5, 175, 0.4) !important;
                        }
                    </style>
                    @endif
                ')
            )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                \App\Filament\Widgets\StatsOverviewWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
