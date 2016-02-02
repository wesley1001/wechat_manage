<?php namespace App\Models;

class AclGroup extends BaseModel
{
    protected $table = 'acl_groups';

    /**
     * 该组下的权限
     */
    public function permission()
    {
        return $this->belongsToMany(AclGroup::class, 'acl_group_permissions', 'group_id', 'permission_id');
    }

    /**
     * 该组合下的所有用户
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'acl_user_groups');
    }

}