<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $bindingList = [
        \App\Contracts\ICustomCache::class => \App\Realizes\CustomCache::class
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindingInterface();
    }

    /**
     * 绑定接口
     */
    public function bindingInterface()
    {
        foreach ($this->bindingList as $interface => $realize) {
            $this->app->bind($interface, $realize);
        }
    }
}
