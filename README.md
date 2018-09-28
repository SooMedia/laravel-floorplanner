[![Build Status](https://travis-ci.org/SooMedia/laravel-floorplanner.svg?branch=master)](https://travis-ci.org/SooMedia/laravel-floorplanner)

# Laravel Floorplanner

Laravel Service Provider for the Floorplanner API.

## Requirements

The Floorplanner service provider requires Laravel version `5.6` and above and PHP version `7.2` and above.

## Installation

Use [Composer](https://getcomposer.org) to install this package:

```bash
composer require soomedia/laravel-floorplanner
```

The package will be automatically discovered by your Laravel installation, so you don't need to add the service provider and facade to your app config file.

## Configuration

First you have to publish the config file:

```bash
php artisan vendor:publish --provider="SooMedia\LaravelFloorplanner\FloorplannerServiceProvider"
```

Now you can find the config file in `config/floorplanner.php`. Here you can configure the HTTP client's options. The API key is best to be configured using environment variables:

```dotenv
FLOORPLANNER_API_KEY=my_api_key
```

## Usage

You can use the `Floorplanner` facade to get an API endpoint:

```php
$user = \Floorplanner::users()->show(6);
```
