<?php

namespace JeroenNoten\LaravelCreateAdmin;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use JeroenNoten\LaravelAdminLte\ServiceProvider as AdminLteServiceProvider;
use JeroenNoten\LaravelCkEditor\ServiceProvider as CkEditorServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->commands(CreateAdmin::class);
    }

    public function register()
    {
        //
    }
}