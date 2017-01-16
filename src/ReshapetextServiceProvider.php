<?php
namespace Thesoulless\Reshapetext;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ReshapetextServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        // $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'Reshapetext');
        
        // use this if your package has lang files
        // $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'Reshapetext');
        
        // use this if your package has routes
        // $this->setupRoutes($this->app->router);
        
        // use this if your package needs a config file
        // $this->publishes([
        //         __DIR__.'/config/config.php' => config_path('Reshapetext.php'),
        // ]);
        
        // use the vendor configuration file as fallback
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/config.php', 'Reshapetext'
        // );
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    /*public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'thesoulless\Reshapetext\Http\Controllers'], function ($router) {
            require __DIR__.'/Http/routes.php';
        });
    }*/
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerReshapetext();
        
        // use this if your package has a config file
        // config([
        //         'config/Reshapetext.php',
        // ]);
    }
    
    private function registerReshapetext()
    {
        $this->app->bind('Reshapetext', function ($app) {
            return new Reshapetext($app);
        });
    }
}
