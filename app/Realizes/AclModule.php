<?php namespace App\Realizes;

use App\Contracts\IAclModule;
use App\Contracts\ICustomCache;
use Session;
use Illuminate\Pagination\LengthAwarePaginator;

class AclModule implements IAclModule
{
    /**
     * @param int $perPage
     * @param array $columns
     * @param array $withColumns
     * @return mixed
     */
    public function lists($perPage = 15, $columns = ['*'], array $withColumns = [])
    {
        return app(ICustomCache::class)->get('cache.acl.module.lists', function () {

        }, Session::class);
    }

}