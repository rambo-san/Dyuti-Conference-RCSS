<?php

namespace App\Data\Repositories\User;

use App\Data\Models\User;
use Illuminate\Support\Facades\Hash;

class EloquentRepository implements UserRepository
{

    
   /**
     *Return All
     */
    public function all($where = [],  $select = [], $first = false)
    {
        if (empty($select)) {
            $select = ['*'];
        }

        if (count($where) == 0) {
            $res = User::select($select);
        } else {
            $res = User::select($select);
            foreach ($where as $key => $value) {
                $res->where($key, $value);
            }
        }

      
        if ($first) {
            return $res->first();
        }
        return $res->orderBy("id","asc")->get();
    }

    /**
     * Return Specific Object By Id
     */
    public function get($id)
    {
        return User::find($id);
    }
   
    
    /**
     * Return Datatable
     */
    public function dataTable()
    {
        return User::select('*');
    }

    /**
     * Update Status
     */
    public function createUpdate(array $data, $id = 0)
    {


        $obj = User::find($id);
        if($data['password']!="") $data['password']=Hash::make($data['password']);

        if (is_null($obj)) {
            $obj = User::create($data);
        } else {
            if($data['password']=="") 
            {                
                $data['password']=$obj->password;
            }
           $obj->update($data);
            
        }

        return $obj;
    }

   
   


    
}
