<?php namespace Wooxo\YouSignApiClientLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class YouSignApiClientLaravelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('wooxo/yousign-api-client-laravel');
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('YouSignApiClientLaravel', 'Wooxo\YouSignApiClientLaravel\YouSignApiClientLaravel');
        });
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
