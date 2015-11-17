<?php
namespace Pezhvak\SMS;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider {


	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defere = true;

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
	}

	protected function handleConfig()
	{
		$packageConfig = __DIR__ . '/config/recaptcha.php';
		$destinationConfig = config_path('recaptcha.php');
		$this->publishes([
			$packageConfig => $destinationConfig,
		]);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'SMS',
		];
	}
}