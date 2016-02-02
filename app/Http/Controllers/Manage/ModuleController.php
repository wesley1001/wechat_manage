<?php

namespace App\Http\Controllers\Manage;

/**
 * Class ModuleController
 * @package App\Http\Controllers\Manage
 */
class ModuleController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    public function index()
    {
        return view("{$this->moduleUri}.index");
    }
}
