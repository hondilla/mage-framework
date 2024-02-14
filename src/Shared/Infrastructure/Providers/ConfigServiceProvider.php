<?php declare(strict_types=1);

namespace Mage\Framework\Shared\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

final class ConfigServiceProvider extends ServiceProvider
{
    /** @psalm-api */
    public function boot(): void
    {
        $this->publishes([
            dirname(__DIR__, 4) . '/config/mage.bus.php' => config_path('mage.bus.php'),
        ], 'mage.bus');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__, 4) . '/config/mage.bus.php', 'mage.bus');
    }
}
