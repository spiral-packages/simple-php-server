<?php

declare(strict_types=1);

namespace Spiral\SimpleServer\Commands;

use Spiral\Console\Command;

class SimpleServerCommand extends Command
{
    protected const NAME = 'simple-php-server';
    protected const DESCRIPTION = 'My command';
    protected const ARGUMENTS = [];

    public function perform(): int
    {
        return self::SUCCESS;
    }
}
