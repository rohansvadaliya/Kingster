<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    /**
        * The path to the "home" route for your application.
        *
        * Typically, users are redirected here after authentication.
        *
        * @var string
    */
    public const HOME = '/admin/index_admin';

    public function boot(): void{
        parent::boot();
    }
}
