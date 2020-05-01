<?php

namespace Ravialdo\DemoPackage\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;

class DemoPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
	    // register our DemoController
        $this->app->make('Ravialdo\DemoPackage\DemoController');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	    // routes app
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        
        // publish config
        $this->publishes([
           __DIR__.'/../resources/config/demo.php' => config_path('demo.php'),
        ]);
         
        // view
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'demo');

         // publish view
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/demo'),
         ]);

         // translation
        $this->loadTranslationsFrom(__DIR__.'/..resources/lang', 'demo');

        //publish translation
        $this->publishes([
           __DIR__.'/../resources/lang' => resource_path('lang/demo'),
         ]);

        
    }
}
