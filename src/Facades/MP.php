<?php 
namespace yuriAldair\mercadopago\Facades;

use Illuminate\Support\Facades\Facade;

class MP extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MP';
    }
}