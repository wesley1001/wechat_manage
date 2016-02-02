<?php

namespace App\Http\Controllers\Manage;

use App\Contracts\IAclModule;
use App\Http\Requests\AclModuleRequest;
use App\Models\AclModule as AclModuleModel;

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

    /**
     * 渲染首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view("{$this->moduleUri}.index");
    }

    /**
     * 渲染添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("{$this->moduleUri}.edit");
    }

    /**
     * 保存模块
     * @param AclModuleRequest $request
     * @param IAclModule $aclModuleService
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(AclModuleRequest $request, IAclModule $aclModuleService)
    {
        $result = $aclModuleService->storeModule($request);
        return $result ? response('保存成功!') : response('保存失败!', 400);
    }

    /**
     * 编辑模块
     * @param AclModuleModel $aclModule
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(AclModuleModel $aclModule)
    {
        return view("{$this->moduleUri}.edit", compact('aclModule'));
    }

}
