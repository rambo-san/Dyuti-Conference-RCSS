<?php

namespace Database\Seeders;

use App\Data\Models\User;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                
                
                'email' => 'dev@phitany.com',
                'password' => encrypt(uniqid()),
                'name' => 'Developer',
                'is_active' => '1',
            ],
            [
                
                'email' => 'admin@phitany.com',
                'password' => encrypt(uniqid()),
                'name' => 'Super Admin',
                'is_active' => '1',
            ],
           
        ];

        $insert_array = [];
        foreach ($data as $k => $d) {
            $d["created_at"] = date('Y-m-d H:i:s');
            $d["updated_at"] = date('Y-m-d H:i:s');

            $insert_array[] = $d;
        }

        DB::table('users')->truncate();
        DB::table('users')->insert($insert_array);

        $user = User::find(1);
        $user->assignRole(['developer']);
        
        $user1 = User::find(2);
        $user1->assignRole(['super-admin']);
    }
}
