<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    /**
     * 系统首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view("manage.index");
    }

    public function panel()
    {
        return view("{$this->moduleUri}.panel");
    }
}
