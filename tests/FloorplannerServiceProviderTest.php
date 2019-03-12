<?php
declare(strict_types=1);

namespace Tests;

use Orchestra\Testbench\TestCase;
use SooMedia\Floorplanner\FloorplannerClient;
use SooMedia\LaravelFloorplanner\FloorplannerServiceProvider;

/**
 * Class FloorplannerServiceProviderTest
 *
 * @package Tests
 * @coversDefaultClass \SooMedia\LaravelFloorplanner\FloorplannerServiceProvider
 */
class FloorplannerServiceProviderTest extends TestCase
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

        $app['config']->set(
            'floorplanner.base_uri',
            FloorplannerClient::BASE_URI
        );
    }

    /**
     * @covers ::register
     * @covers ::boot
     * @covers ::provides
     */
    public function testBinding(): void
    {
        $client = app(FloorplannerClient::class);

        $this->assertNotEmpty($client);
        $this->assertInstanceOf(FloorplannerClient::class, $client);
    }
}
