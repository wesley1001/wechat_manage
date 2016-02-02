<?php namespace App\Contracts;

use App\Http\Requests\AclModuleRequest;
use App\Models\AclModule as AclModuleModel;
use Illuminate\Pagination\LengthAwarePaginator;

interface IAclModule
{

    /**
     * 根据ID获取模块
     * @param integer $moduleId
     * @return AclModuleModel
     */
    public function getModule($moduleId);

    /**
     * 获取模块列表
     * @param int $perPage 需要获取的数量
     * @param array $columns 需要查询的字段
     * @param array $withColumns 预载入字段
     * @return LengthAwarePaginator
     */
    public function lists($perPage = 15, $columns = ['*'], array $withColumns = []);

    /**
     * 获取路由所有模块
     * @param bool $unique
     * @return array
     */
    public function routeModuleList($unique = false);

    /**
     * 保存模块
     * @param AclModuleRequest $request
     * @return AclModuleModel
     */
    public function storeModule(AclModuleRequest $request);

    /**
     * 更新模块
     * @param AclModuleModel $model
     * @param AclModuleRequest $request
     * @return mixed
     */
    public function updateModule(AclModuleModel $model, AclModuleRequest $request);

}