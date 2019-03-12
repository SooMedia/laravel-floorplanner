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
    | https://floorplanner.com/api/v2/.
    |
    */

    'base_uri' => env('FLOORPLANNER_BASE_URI', FloorplannerClient::BASE_URI),

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
