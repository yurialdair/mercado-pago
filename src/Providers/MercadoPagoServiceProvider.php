<?php
namespace yuriAldair\mercadopago\Providers;

use Illuminate\Support\ServiceProvider;
use yuriAldair\mercadopago\MP;

class MercadoPagoServiceProvider extends ServiceProvider 
{

	protected $mp_app_id;
	protected $mp_app_secret;

	public function boot()
	{
		
		$this->publishes([__DIR__.'/../resources/config/mercadopago.php' => config_path('mercadopago.php')]);

		$this->mp_app_id     = config('mercadopago.app_id');
		$this->mp_app_secret = config('mercadopago.app_secret');
	}

	public function register()
	{
		$this->app->singleton('MP', function(){
			return new MP($this->mp_app_id, $this->mp_app_secret);
		});
	}
}