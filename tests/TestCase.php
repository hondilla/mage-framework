<?php declare(strict_types=1);

namespace Tests;

use Mage\Framework\MageServiceProvider;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    use MockeryPHPUnitIntegration;

    public function getPackageProviders($app): array
    {
        return [MageServiceProvider::class];
    }
}
