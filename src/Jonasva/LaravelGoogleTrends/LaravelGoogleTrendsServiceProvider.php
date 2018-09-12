<?php namespace Jonasva\LaravelGoogleTrends;

use Illuminate\Support\ServiceProvider;

class LaravelGoogleTrendsServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//$this->package('jonasva/laravel-google-trends', 'laravel-google-trends');
        	$this->publishes([
           		 __DIR__.'/../../config/laravel-google-trends.php' => config_path('laravel-google-trends.php'),
       		 ], 'config');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//$this->app['laravel-google-trends'] = $this->app->share(function($app)
        	$this->app->singleton('laravel-google-trends',function($app)
		{
			return new LaravelGoogleTrends($app['config']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('laravel-google-trends');
	}

}
