<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * @var string 当前模块的URI
     */
    protected $moduleUri;

    public function __construct()
    {
        $className = get_class($this);
        $className = explode('\\', $className);
        $fillControllerName = str_replace('Controller', '', array_pop($className)); //排除掉Controller关键字的当前控制器名
        $moduleName = array_pop($className);    //当前模块名
        $this->moduleUri = strtolower("{$moduleName}.{$fillControllerName}");
    }
}
