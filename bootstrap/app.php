<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\FirstTimeRedirect;
use App\Http\Middleware\EnsureUserHasRole;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('web', FirstTimeRedirect::class);
        $middleware->redirectGuestsTo('login');
        $middleware->redirectUsersTo('/');
        $middleware->alias([
            'health_worker' => App\Http\Middleware\EnsureUserHasRole::class.':health_worker',
            'admin' => App\Http\Middleware\EnsureUserHasRole::class.':admin',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
