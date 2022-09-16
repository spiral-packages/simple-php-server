# Simple PHP web server for Spiral Framework

[![PHP Version Require](https://poser.pugx.org/spiral-packages/simple-php-server/require/php)](https://packagist.org/packages/spiral-packages/simple-php-server)
[![Latest Stable Version](https://poser.pugx.org/spiral-packages/simple-php-server/v/stable)](https://packagist.org/packages/spiral-packages/simple-php-server)
[![psalm](https://github.com/spiral-packages/simple-php-server/actions/workflows/psalm.yml/badge.svg)](https://github.com/spiral-packages/simple-php-server/actions)
[![Codecov](https://codecov.io/gh/spiral-packages/simple-php-server/branch/master/graph/badge.svg)](https://codecov.io/gh/spiral-packages/simple-php-server/)
[![Total Downloads](https://poser.pugx.org/spiral-packages/simple-php-server/downloads)](https://packagist.org/spiral-packages/simple-php-server/phpunit)

The package helps running applications on the PHP development server. As a developer, you can use the package to develop
and test various functions within the application. It also accepts two additional options. You can use the host for
changing application’s address and port.

## Requirements

Make sure that your server is configured with following PHP version and extensions:

- PHP 8.0+
- Spiral framework 2.9+

## Installation

You can install the package via composer:

```bash
composer require spiral-packages/simple-php-server
```

After package install you need to register bootloader from the package.

```php
protected const LOAD = [
    // ...
    \Spiral\SimpleServer\Bootloader\SimpleServerBootloader::class,
];
```

> Note: if you are using [`spiral-packages/discoverer`](https://github.com/spiral-packages/discoverer),
> you don't need to register bootloader by yourself.

## Starting a server

```bash
php app.php serve
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [kastahov](https://github.com/spiral-packages)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
