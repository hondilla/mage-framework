<?php declare(strict_types=1);

use Illuminate\Foundation\Application;

return Application::configure(basePath: dirname(__DIR__, 4))
    ->withRouting(function () {
        //
    })
    ->withMiddleware(function () {
        //
    })
    ->withExceptions(function () {
        //
    })
    ->withProviders([Mage\Framework\MageServiceProvider::class])
    ->create()
    ->useAppPath(base_path('src'))
    ->useBootstrapPath(storage_path('framework'));
