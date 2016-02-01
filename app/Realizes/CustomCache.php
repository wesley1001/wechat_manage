<?php namespace App\Realizes;

use App\Contracts\ICustomCache;

use Closure;
use Route;
use Cache;
use Carbon\Carbon;

class CustomCache implements ICustomCache
{
    /**
     * 需要排除缓存的列表
     * @var array
     */
    protected $fillNamespace = [
        'App\Http\Controllers\Manage',
    ];

    public function get($key, $default = null, $driver = Cache::class)
    {
        $driverObj = app($driver);  //初始化缓存驱动
        $data = $driverObj->get($key);  //获取缓存数据
        //如果是空的或者是排除缓存的列表内，则重新获取数据
        if (is_null($data) || $this->isExclude()) {
            $data = is_callable($default) ? $default() : $default;
            $driverObj->put($key, $data, Carbon::now()->addMinute(30));
        }
        return $data;
    }

    /**
     * 获取是否在排除列表里
     * @return bool
     */
    protected function isExclude()
    {
        $result = false;
        foreach ($this->fillNamespace as $namespace) {
            if (stripos(Route::current()->getAction()['namespace'], $namespace) !== false) {
                $result = true;
                break;
            }
        }
        return $result;
    }

}