<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    /**
     * @var array 需要做日期处理的字段
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * @var array 黑名单
     */
    protected $guarded = [];

    protected function getDateFormat()
    {
        return 'U';
    }

    public function scopeMultiwhere($query, $arr)
    {
        if (!is_array($arr)) {
            return $query;
        }
        foreach ($arr as $key => $value) {
            $query = $query->where($key, $value);
        }
        return $query;
    }
}