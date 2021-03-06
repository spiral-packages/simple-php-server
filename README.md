Simple PHP web server for Spiral Framework

[![PHP](https://img.shields.io/packagist/php-v/spiral-packages/simple-php-server.svg?style=flat-square)](https://packagist.org/packages/spiral-packages/simple-php-server)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/spiral-packages/simple-php-server.svg?style=flat-square)](https://packagist.org/packages/spiral-packages/simple-php-server)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spiral-packages/simple-php-server/run-tests?label=tests&style=flat-square)](https://github.com/spiral-packages/simple-php-server/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/spiral-packages/simple-php-server.svg?style=flat-square)](https://packagist.org/packages/spiral-packages/simple-php-server)

The package helps running applications on the PHP development server. As a developer, you can use the package to develop and test various functions within the application. It also accepts two additional options. You can use the host for changing application’s address and port.

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
