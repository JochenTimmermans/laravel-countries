<?php

namespace JochenTimmermans\LaravelCountries\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelCountriesServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
	}
}