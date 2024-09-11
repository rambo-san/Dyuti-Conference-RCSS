<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

use DB;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        DB::table('model_has_roles')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_has_permissions')->truncate();


        $data = [

            ['name'=>'developer'],
            ['name'=>'super-admin'],
            ['name'=>'center-admin'],
            ['name'=>'staff'],

        ];
         
        foreach ($data as $role_dt) {
             $rst= Role::create($role_dt);
        }

    }
}
