<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ]);

        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Render halaman error custom untuk semua HTTP exception
        $exceptions->respond(function (\Symfony\Component\HttpFoundation\Response $response) {
            $status = $response->getStatusCode();

            // Cek apakah ada view khusus untuk status code ini
            if (in_array($status, [404, 500, 503]) && view()->exists("errors.{$status}")) {
                return response()->view("errors.{$status}", ['status' => $status], $status);
            }

            // Fallback ke 500 untuk semua error 5xx lainnya
            if ($status >= 500 && view()->exists('errors.500')) {
                return response()->view('errors.500', ['status' => $status], $status);
            }

            // Fallback ke 404 untuk error 4xx lainnya (403, 405, dll)
            if ($status >= 400 && view()->exists('errors.404')) {
                return response()->view('errors.404', ['status' => $status], $status);
            }

            return $response;
        });
    })->create();
