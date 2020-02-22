# Laravel Thumbor url helper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/optimistdigital/nova-page-manager.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/nova-page-manager)
[![Total Downloads](https://img.shields.io/packagist/dt/optimistdigital/nova-page-manager.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/nova-page-manager)

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
composer require optimistdigital/laravel-thumbor
```

(Optional) Publish the `laravel-thumbor` configuration file and edit it to your preference:

```
php artisan vendor:publish --provider="OptimistDigital\LaravelThumbor\ToolServiceProvider" --tag="config"
```

## Credits

- [Allan Tatter](https://github.com/allantatter)

## License

Laravel Thumbor is open-sourced software licensed under the [MIT license](LICENSE.md).
