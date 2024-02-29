<?php declare(strict_types=1);

namespace Mage\Framework;

use Carbon\Laravel\ServiceProvider;
use Mage\Framework\Bus\BusServiceProvider;
use Mage\Framework\Config\ConfigServiceProvider;
use Mage\Framework\Wiring\WiringServiceProvider;

final class FrameworkServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(ConfigServiceProvider::class);
        $this->app->register(BusServiceProvider::class);
        $this->app->register(WiringServiceProvider::class);
    }
}
