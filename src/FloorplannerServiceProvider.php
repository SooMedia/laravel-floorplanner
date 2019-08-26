<?php
declare(strict_types=1);

namespace SooMedia\LaravelFloorplanner;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use SooMedia\Floorplanner\FloorplannerClient;

/**
 * Class FloorplannerServiceProvider
 *
 * @package SooMedia\LaravelFloorplanner
 */
class FloorplannerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(
            FloorplannerClient::class,
            function (Application $app) {
                $config = $app['config']['floorplanner'];

                return new FloorplannerClient(
                    $config['api_key'],
                    $config['base_uri'],
                    $config['api_endpoint'],
                    $config['http_client_options'] ?? []
                );
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/floorplanner.php' => config_path('floorplanner.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [
            FloorplannerClient::class,
        ];
    }
}
