<?php namespace App\Http\Controllers\Manage;

class TestController extends BaseController
{
    public function index()
    {
        dd($this->moduleUri);
        echo '123123';
    }
}