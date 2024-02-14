<?php declare(strict_types=1);

namespace Mage\Framework;

use Illuminate\Support\ServiceProvider;
use Mage\Framework\Shared\Infrastructure\Providers\BusServiceProvider;
use Mage\Framework\Shared\Infrastructure\Providers\ConfigServiceProvider;

/** @psalm-api */
final class MageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(ConfigServiceProvider::class);
        $this->app->register(BusServiceProvider::class);
    }
}
