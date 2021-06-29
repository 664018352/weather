<?php

namespace Tannaw\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather('64fcfd69600a0c5e0b7c2c07c22dc082');
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}