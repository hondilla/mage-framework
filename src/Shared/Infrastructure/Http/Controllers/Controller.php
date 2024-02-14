<?php declare(strict_types=1);

namespace Mage\Framework\Shared\Infrastructure\Http\Controllers;

use Mage\Bus\Command\CommandBus;
use Mage\Bus\Command\QueryBus;

/** @psalm-api */
abstract class Controller
{
    public function __construct(
        protected CommandBus $command,
        protected QueryBus $query
    ) {}
}
