<?php

declare(strict_types=1);

namespace Spiral\SimpleServer\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Core\Container;
use Spiral\Config\ConfiguratorInterface;
use Spiral\SimpleServer\Commands;
use Spiral\SimpleServer\Config\SimpleServerConfig;
use Spiral\Console\Bootloader\ConsoleBootloader;

class SimpleServerBootloader extends Bootloader
{
    protected const BINDINGS = [];
    protected const SINGLETONS = [];
    protected const DEPENDENCIES = [
        ConsoleBootloader::class
    ];

    public function __construct(private ConfiguratorInterface $config)
    {
    }

    public function boot(Container $container, ConsoleBootloader $console): void
    {
        $this->initConfig();

        $console->addCommand(Commands\SimpleServerCommand::class);
    }

    public function start(Container $container): void
    {
    }

    private function initConfig(): void
    {
        $this->config->setDefaults(
            SimpleServerConfig::CONFIG,
            []
        );
    }
}
