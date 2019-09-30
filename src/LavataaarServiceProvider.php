<?php


namespace Darwin8\Lavataaar;


use Avataaar\Avataaar;
use Illuminate\Support\ServiceProvider;

class LavataaarServiceProvider extends ServiceProvider
{

    /**
     * @var bool
     */
    protected $defer = true;


    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Lavataaar', function () {
            return new Avataaar(env('AVATAAAR_HOST', 'https://avataaars.io'));
        }
        );
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array('Lavataaar');
    }
}