<?php
declare(strict_types=1);

namespace Tests;

use Orchestra\Testbench\TestCase;
use SooMedia\Floorplanner\Endpoints\UsersEndpoint;
use SooMedia\LaravelFloorplanner\FloorplannerFacade;
use SooMedia\LaravelFloorplanner\FloorplannerServiceProvider;

/**
 * Class FloorplannerFacadeTest
 *
 * @package Tests
 * @coversDefaultClass \SooMedia\LaravelFloorplanner\FloorplannerFacade
 */
class FloorplannerFacadeTest extends TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     * @SuppressWarnings("unused")
     */
    protected function getPackageProviders($app): array
    {
        return [
            FloorplannerServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('floorplanner.api_key', 'my_api_key');
    }

    /**
     * Get package aliases.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     * @SuppressWarnings("unused")
     */
    protected function getPackageAliases($app)
    {
        return [
            'Floorplanner' => FloorplannerFacade::class,
        ];
    }

    /**
     * @covers ::getFacadeAccessor
     */
    public function testFacade(): void
    {
        app('config')->set(['floorplanner.api_key' => 'my_api_key']);

        $users = \Floorplanner::users();

        $this->assertInstanceOf(UsersEndpoint::class, $users);
    }
}
