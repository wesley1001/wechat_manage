<?php namespace App\Http\Composer;

use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Contracts\View\View;

class ViewShareComposer
{
    public function intoCaptcha(View $view)
    {
        $builder = app(CaptchaBuilder::class);
        $builder->build(100);
        $view->with('captcha', $builder);
    }
}