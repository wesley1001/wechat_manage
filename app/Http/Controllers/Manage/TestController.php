<?php namespace App\Http\Controllers\Manage;

/**
 * Class TestController
 * @package App\Http\Controllers\Manage
 */
class TestController extends BaseController
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * @Get("test99999", lilichun123="chun")
     */
    public function index()
    {
        return response(['aa' => '123'], 400);
        dd(app(\App\Contracts\IAclModule::class)->routeModuleList());

        die;

        foreach(\Route::getRoutes() as $item){
            dd($item->getAction());
        }

        die;
        dump(\Route::currentRouteAction());
        foreach(\Route::getRoutes() as $item){
//            dd($item);
            dump($item->getAction());
        }

        return '123123';
    }
}