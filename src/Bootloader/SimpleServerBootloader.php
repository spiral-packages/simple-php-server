<?php

declare(strict_types=1);

namespace Spiral\SimpleServer\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\SimpleServer\Commands;
use Spiral\Console\Bootloader\ConsoleBootloader;

class SimpleServerBootloader extends Bootloader
{
    protected const BINDINGS = [];
    protected const SINGLETONS = [];
    protected const DEPENDENCIES = [
        ConsoleBootloader::class
    ];

    public function init(ConsoleBootloader $console): void
    {
        $console->addCommand(Commands\ServeCommand::class);
    }
}
