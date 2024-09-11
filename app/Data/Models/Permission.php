<?php
namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $guard_name = 'web';

    protected $fillable = [
        'name', 
        'guard_name', 

    ];

   

}
