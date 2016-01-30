<?php

namespace App\Providers;
use App\Http\Composer\ViewShareComposer;
use Illuminate\Support\ServiceProvider;

class ViewShareServiceProvider extends ServiceProvider
{

    protected $viewShareClass = ViewShareComposer::class;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('manage.login', "{$this->viewShareClass}@intoCaptcha");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
