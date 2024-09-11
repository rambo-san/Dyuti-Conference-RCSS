<?php
namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $guard_name = 'web';

    protected $fillable = [
        'name', 
        'guard_name', 

    ];

     public function permission()
    {
        return $this->belongsToMany(Permission::class, "role_has_permissions", "role_id", "permission_id");
    }

    // Check individual permission
    public function hasPermission($permission)
    {
        if ($this->id == 1 ) {
            return true;
        }

        if ($this->permission()->where("name", $permission)->first()) {
            return true;
        }

        return false;
    }

   

}
