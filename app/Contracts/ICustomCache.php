<?php namespace App\Contracts;

use Cache;
use Closure;

interface ICustomCache
{
    /**
     * 获取缓存数据
     * @param $key
     * @param Closure|null $default
     * @param string $driver
     * @return mixed
     */
    public function get($key, $default = null, $driver = Cache::class);
}