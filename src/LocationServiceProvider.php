<?php
namespace iox\locationist;

use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('location',function($app){
            return new \Iox\Locationist\Location();
        });
    }

    public function boot()
    {
        //
    }
}