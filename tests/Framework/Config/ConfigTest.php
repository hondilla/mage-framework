<?php declare(strict_types=1);

namespace Framework\Config;

use Mage\Framework\Config\ConfigServiceProvider;
use Tests\TestCase;

class ConfigTest extends TestCase
{
    public function test_config(): void
    {
        $this->assertEquals('mysql', config('database.default'));
        $this->assertEquals('root', config('database.connections.mysql.password'));
        $this->assertEquals('redis', config('cache.default'));
        $this->assertEquals('mailpit', config('mail.default'));
        $this->assertEquals([
            'path' => base_path('src'),
            'pattern' => '/^.*\/Application\/[^\/]+$/',
        ], config('mage.bus.paths'));
        $this->assertEquals([
            'path' => base_path('src'),
            'pattern' => '/^.*\/Infrastructure\/[^\/]+$/',
        ], config('mage.wiring.bindings'));
    }

    public function getPackageProviders($app): array
    {
        return [ConfigServiceProvider::class];
    }
}
