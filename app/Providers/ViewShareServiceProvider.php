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
        view()->composer('manage.login', "{$this->viewShareClass}@intoCaptcha");    //登录验证码
        view()->composer('manage.module.form', "{$this->viewShareClass}@intoModuleList");
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
