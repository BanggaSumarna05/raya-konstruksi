<?php

namespace App\Providers\Filament;

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
            ->path('admin')
            ->login()
            ->brandName('Raya Konstruksi')
            ->brandLogo(asset('assets/img/logo-raya.png'))
            ->brandLogoHeight('2.5rem')
            ->favicon(asset('assets/img/logo-raya-polos.png'))
            ->font('Poppins')
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
                    <style>
                        body {
                            background-image: url("/assets/img/cover-plant.webp") !important;
                            background-size: cover !important;
                            background-position: center !important;
                        }
                        body::before {
                            content: "";
                            position: absolute;
                            inset: 0;
                            background: rgba(15, 23, 42, 0.8);
                            z-index: -1;
                        }
                        .fi-simple-main-content {
                            background: rgba(255, 255, 255, 0.03) !important;
                            backdrop-filter: blur(20px) !important;
                            -webkit-backdrop-filter: blur(20px) !important;
                            border: 1px solid rgba(255, 255, 255, 0.1) !important;
                            border-radius: 1.5rem !important;
                            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important;
                        }
                        .fi-simple-main-content h2, 
                        .fi-simple-main-content p, 
                        .fi-simple-main-content label, 
                        .fi-simple-main-content span {
                            color: #ffffff !important;
                        }
                        .fi-input {
                            background: rgba(255, 255, 255, 0.05) !important;
                            border: 1px solid rgba(255, 255, 255, 0.2) !important;
                            color: white !important;
                        }
                        .fi-input:focus {
                            border-color: #0c00b1ff !important;
                            box-shadow: 0 0 0 1px #0c00b1ff !important;
                        }
                        .fi-checkbox {
                            background: rgba(255, 255, 255, 0.1) !important;
                            border-color: rgba(255, 255, 255, 0.3) !important;
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
