<?php
namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class RoleHasPermissions extends Model
{
    protected $table = 'role_has_permissions';

    protected $guard_name = 'web';

    protected $fillable = [
        'permission_id', 
        'role_id', 

    ];

   

}
