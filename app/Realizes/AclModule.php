<?php namespace App\Realizes;

use App\Contracts\IAclModule;
use App\Contracts\ICustomCache;
use App\Http\Requests\AclModuleRequest;
use Session;
use Route;
use App\Models\AclModule as AclModuleModel;
use Illuminate\Pagination\LengthAwarePaginator;

class AclModule implements IAclModule
{
    /**
     * 根据ID获取模块
     * @param integer $moduleId
     * @return AclModuleModel
     */
    public function getModule($moduleId)
    {
        return AclModuleModel::findOrFail($moduleId);
    }


    /**
     * @param int $perPage
     * @param array $columns
     * @param array $withColumns
     * @return LengthAwarePaginator
     */
    public function lists($perPage = 15, $columns = ['*'], array $withColumns = [])
    {
        return app(ICustomCache::class)->get('cache.acl.module.lists', function () use ($perPage, $columns, $withColumns) {
            return AclModuleModel::with($withColumns)->paginate($perPage, $columns);
        }, Session::class);
    }

    /**
     * 获取路由所有模块
     * @param bool $unique
     * @return array
     */
    public function routeModuleList($unique = false)
    {
        $moduleList = [];
        foreach (Route::getRoutes() as $item) {
            //切分出控制器名称部分
            list($controller,) = explode('@', array_get($item->getAction(), 'controller', ''));
            $controller && $moduleList[] = $controller;
        }
        $moduleList = $unique ? $this->uniqueModuleList($moduleList) : $moduleList;
        return array_value_value($moduleList);
    }

    /**
     * 获取未分配的模块列表
     * @param array $allModuleList
     * @return array
     */
    protected function uniqueModuleList(array $allModuleList)
    {
        $dbModuleList = AclModuleModel::all();  //获取数据库中所有模块信息
        $dbModuleList = array_pluck($dbModuleList ? $dbModuleList->toArray() : [], 'ident');
        return array_diff($allModuleList, $dbModuleList);
    }

    /**
     * @param AclModuleRequest $request
     * @return AclModuleModel
     */
    public function storeModule(AclModuleRequest $request)
    {
        $data = $request->all();
        $data['status'] = array_get($data, 'status') == 'on' ? 1 : 0;
        return AclModuleModel::create($data);
    }

    /**
     * @param AclModuleModel $model
     * @param AclModuleRequest $request
     * @return mixed
     */
    public function updateModule(AclModuleModel $model, AclModuleRequest $request)
    {
        return $model->update($request->all());
    }


}