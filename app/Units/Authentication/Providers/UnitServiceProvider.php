<?php
/**
 * Created by PhpStorm.
 * User: AntonioQM
 * Date: 05/03/17
 * Time: 15:24
 */

namespace App\Units\Authentication\Providers;


//use App\Providers\AuthServiceProvider;
use Illuminate\Support\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}