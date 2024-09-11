<?php

namespace App\Data\Repositories\Permission;

use App\Data\Models\Permission;

class EloquentRepository implements PermissionRepository
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
            $res = Permission::select($select);
        } else {
            $res = Permission::select($select);
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
        return Permission::find($id);
    }

  

    /**
     * Return dummy object
     */
    public function getDummy()
    {
        $obj = new Permission;
        $obj->id = 0;

        return $obj;
    }

    /**
     * Creates/Update & Return Object
     */
    public function createUpdate(array $data, $id = 0)
    {


        $obj = Permission::find($id);

        if (is_null($obj)) {
            $obj = Permission::create($data);
        } else {
           $obj->update($data);
            
        }

        return $obj;
    }

    /**
     * Delete Object
     */
    public function delete($id)
    {
        return Permission::where("id", $id)->delete();
    }

    /**
     * Return Datatable
     */
    public function dataTable()
    {
        return Permission::select('*');
    }

    /**
     * Update Status
     */
    public function action($id, $status)
    {
        $obj = Permission::find($id);

        if (!is_null($obj) & in_array($status, [0, 1])) {
            $obj->is_active = $status;
            $obj->save();
        }

        return $obj;
    }

    
}
