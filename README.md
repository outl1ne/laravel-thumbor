# Laravel Thumbor url helper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/outl1ne/laravel-thumbor.svg?style=flat-square)](https://packagist.org/packages/outl1ne/laravel-thumbor)
[![Total Downloads](https://img.shields.io/packagist/dt/outl1ne/laravel-thumbor.svg?style=flat-square)](https://packagist.org/packages/outl1ne/laravel-thumbor)

This [Laravel](https://laravel.com) package is a wrapper around [99designs/phumbor](https://github.com/99designs/phumbor) package which generates [Thumbor](https://thumbor.readthedocs.io/) URLs.

## Requirements

- Laravel 5+

## Features

- Generates Thumbor URLs

## Usage

```
echo \Thumbor::url('https://example.com/photo.jpg)->resize(160, 90)->build();
```

## Installation

Install the package in a Laravel Nova project via Composer and run migrations:

```
composer require outl1ne/laravel-thumbor
```

(Optional) Publish the configuration file and edit it to your preference:

```
php artisan vendor:publish --provider="Outl1ne\LaravelThumbor\ServiceProvider" --tag="config"
```

## Credits

- [Allan Tatter](https://github.com/allantatter)
- [Kaarel Õun](https://github.com/kaareloun)
- [99designs (phumbor)](https://github.com/99designs/phumbor)

## License

Laravel Thumbor is open-sourced software licensed under the [MIT license](LICENSE.md).
