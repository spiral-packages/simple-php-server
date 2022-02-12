<?php

declare(strict_types=1);

namespace Spiral\SimpleServer\Config;

use Spiral\Core\InjectableConfig;

final class SimpleServerConfig extends InjectableConfig
{
    public const CONFIG = 'simple-php-server';
    protected $config = [];
}
