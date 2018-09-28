<?php

namespace SooMedia\LaravelFloorplanner;

use Illuminate\Support\Facades\Facade;
use SooMedia\Floorplanner\FloorplannerClient;

/**
 * Class FloorplannerFacade
 *
 * @package SooMedia\LaravelFloorplanner
 */
class FloorplannerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return FloorplannerClient::class;
    }
}
