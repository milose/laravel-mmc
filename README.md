# laravel-mmc

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel Artisan console command to create singular Model / Migration / Controller files.

## Install

To install this package run

``` bash
composer require milose/laravel-mmc
```
Next, you should add the service provider to your config/app.php file by finding providers key, and adding this to the end of the list:
```php
Milose\LaraveLMMC\LaravelMMCServiceProvider::class,
```

## Usage

``` bash
php artisan mmc invoice item
```
This will create `InvoiceItem` model, `create_invoice_item_table` migration and `InvoiceItemController`

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email milos@deva.co instead of using the issue tracker.

## Credits

- [Milos Sakovic][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT).

[ico-version]: https://img.shields.io/packagist/v/milose/laravel-mmc.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/milose/laravel-mmc/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/milose/laravel-mmc.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/milose/laravel-mmc.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/milose/laravel-mmc.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/milose/laravel-mmc
[link-travis]: https://travis-ci.org/milose/laravel-mmc
[link-scrutinizer]: https://scrutinizer-ci.com/g/milose/laravel-mmc/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/milose/laravel-mmc
[link-downloads]: https://packagist.org/packages/milose/laravel-mmc
[link-author]: https://github.com/milose
[link-contributors]: ../../contributors
