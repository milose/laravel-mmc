# laravel-mmc

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Laravel Artisan console command to create Model / Migration / Controller files in singular form.

## Install

To install this package run

``` bash
composer require milose/laravel-mmc
```

**If you are using Laravel version `>= 5.5` you can skip the step below.**

#### Adding a Service Provider

In your config/app.php file, find providers key, and add this to the end of the list:

```php
Milose\LaravelMMC\LaravelMMCServiceProvider::class,
```

## Usage

``` bash
php artisan mmc invoice item
```

This will create `InvoiceItem` model, `create_invoice_item_table` migration and `InvoiceItemController`

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Credits

- [Milos Sakovic][link-author]

## License

The MIT License (MIT).

[ico-version]: https://img.shields.io/packagist/v/milose/laravel-mmc.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/milose/laravel-mmc/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/milose/laravel-mmc.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/milose/laravel-mmc
[link-travis]: https://travis-ci.org/milose/laravel-mmc
[link-downloads]: https://packagist.org/packages/milose/laravel-mmc
[link-author]: https://github.com/milose
