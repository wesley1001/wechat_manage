<?php namespace App\Http\Composer;

use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Contracts\View\View;
use App\Contracts\IAclModule;

class ViewShareComposer
{
    public function intoCaptcha(View $view)
    {
        $builder = app(CaptchaBuilder::class);
        $builder->build(100);
        $view->with('captcha', $builder);
    }

    /**
     * 传递模块列表数据
     * @param View $view
     */
    public function intoModuleList(View $view)
    {
        $view->with('moduleList', app(IAclModule::class)->routeModuleList(true));
    }

}