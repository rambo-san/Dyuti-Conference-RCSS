<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        //Truncate current permissions
        Schema::disableForeignKeyConstraints();
        DB::table('model_has_permissions')->truncate();
       // DB::table('model_has_roles')->truncate();
        DB::table('permissions')->truncate();
      //  DB::table('roles')->truncate();
      //  DB::table('role_has_permissions')->truncate();





       $permission_array= [

            ['name'=>'view dashboard'],

            //User

            ['name'=>'add users'],
            ['name'=>'edit users'],
            ['name'=>'delete users'],
            ['name'=>'view users'],

            //Role
            ['name'=>'view role'],
            ['name'=>'edit role'],



           
        ];

        foreach($permission_array as $permission)
        {
            Permission::create($permission);
        }

       
        
       

      
       
    

    

    }
}
