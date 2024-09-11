<?php

namespace App\Data\Repositories\Contact;

use App\Data\Models\Contact;
use Illuminate\Support\Facades\Hash;

class EloquentRepository implements ContactRepository
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
            $res = Contact::select($select);
        } else {
            $res = Contact::select($select);
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
        return Contact::find($id);
    }
   
    
    /**
     * Return Datatable
     */
    public function dataTable()
    {
        return Contact::select('*');
    }

    /**
     * Update Status
     */
    public function createUpdate(array $data, $id = 0)
    {


        $obj = Contact::find($id);
        if($data['password']!="") $data['password']=Hash::make($data['password']);

        if (is_null($obj)) {
            $obj = Contact::create($data);
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
