# Laravel Floorplanner

Laravel Service Provider for the [Floorplanner API](http://docs.floorplanner.com/floorplanner/api-v2).

## Requirements

The Floorplanner service provider requires Laravel version `9` and above and PHP version `8.1` and above.

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

You can also change the Floorplanner base URI and API endpoint used by the client:

```dotenv
FLOORPLANNER_BASE_URI=https://sandbox.floorplanner.com/
FLOORPLANNER_API_ENDPOINT=api/v2/
```

## Usage

You can use the `Floorplanner` facade to get an API endpoint:

```php
$user = \Floorplanner::users()->show(6);
```

For more information about the available endpoints and how to use them, check out [soomedia/floorplanner-v2](https://github.com/SooMedia/floorplanner-v2).
