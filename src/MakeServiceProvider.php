<?php

namespace KennethSolomon\MakeService;

use Illuminate\Support\ServiceProvider;
use KennethSolomon\MakeService\Console\MakeServiceCommand;

class MakeServiceProvider extends ServiceProvider
{
	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('make:service {file_name}', function () {
			return new MakeServiceCommand;
		});

		$this->commands(['make:service {file_name}']);
	}
}
