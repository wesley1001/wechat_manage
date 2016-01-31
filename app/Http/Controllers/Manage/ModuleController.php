<?php

namespace App\Http\Controllers\Manage;

class ModuleController extends BaseController
{
    public function index()
    {
        return view("{$this->moduleUri}.index");
    }
}
