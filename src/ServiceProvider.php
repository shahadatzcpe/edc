<?php
namespace Shahadat\Edc;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->publishes([
            __DIR__.'/config.php' => config_path('edc.php'), 'edc'
        ]);

        $this->loadRoutesFrom( __DIR__ . '/routes.php');
        $this->loadViewsFrom( __DIR__ . '/views', 'edc');
	}


	/**
	 * Register edc
	 *
	 * @return void
	 */
	public function register()
	{
	   
	}
}