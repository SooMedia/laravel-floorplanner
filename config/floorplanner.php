<?php
declare(strict_types=1);

use SooMedia\Floorplanner\FloorplannerClient;

return [

    /*
    |--------------------------------------------------------------------------
    | Floorplanner API Key
    |--------------------------------------------------------------------------
    |
    | The API key for the Floorplanner API v2.
    |
    */

    'api_key' => env('FLOORPLANNER_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Floorplanner base URI
    |--------------------------------------------------------------------------
    |
    | The base URI for the Floorplanner API v2. Defaults to
    | https://floorplanner.com/.
    |
    */

    'base_uri' => env('FLOORPLANNER_BASE_URI', FloorplannerClient::BASE_URI),

    /*
    |--------------------------------------------------------------------------
    | Floorplanner API endpoint
    |--------------------------------------------------------------------------
    |
    | The API endpoint for the Floorplanner API v2. Defaults to api/v2/.
    |
    */

    'api_endpoint' => env(
        'FLOORPLANNER_API_ENDPOINT',
        FloorplannerClient::API_ENDPOINT
    ),

    /*
    |--------------------------------------------------------------------------
    | HTTP Client Options
    |--------------------------------------------------------------------------
    |
    | Provide options for the Guzzle HTTP client here.
    |
    */

    'http_client_options' => [],

];
