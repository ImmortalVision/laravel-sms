<?php
namespace ImmortalVision\SMS;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider {


	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $deffer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__ . '/Config/SMS.php' => config_path('SMS.php'),
		]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('ImmortalVision\SMS\Contracts\SMS', function () {
			return new Drivers\MeliPayamak;
		});

		$this->app->bind('SMS', function () {
			return new Drivers\MeliPayamak;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'SMS'
		];
	}
}