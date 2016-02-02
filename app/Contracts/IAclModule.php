<?php namespace App\Contracts;

use Illuminate\Pagination\LengthAwarePaginator;

interface IAclModule
{
    /**
     * 获取模块列表
     * @param int $perPage 需要获取的数量
     * @param array $columns 需要查询的字段
     * @param array $withColumns 预载入字段
     * @return LengthAwarePaginator
     */
    public function lists($perPage = 15, $columns = ['*'], array $withColumns = []);

}