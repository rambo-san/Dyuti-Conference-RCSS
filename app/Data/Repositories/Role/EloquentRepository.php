<?php

namespace App\Data\Repositories\Role;

use App\Data\Models\Permission;
use App\Data\Models\Role;
use App\Data\Models\RoleHasPermissions;

class EloquentRepository implements RoleRepository
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
            $res = Role::select($select);
        } else {
            $res = Role::select($select);
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
        return Role::find($id);
    }

    /**
     * Return dummy object
     */
    public function getDummy()
    {
        $obj = new Role;
        $obj->id = 0;

        return $obj;
    }

    /**
     * Creates/Update & Return Object
     */
    public function createUpdate(array $data, $id = false)
    {


        if ($id == false) {
            $obj = Role::create($data);

           $obj->permission()->sync($data["permissions"]);
        } else {
            $obj = Role::where("id", $id)
                ->first();
            if (!is_null($obj)) {
                $obj->update($data);
                $obj->permission()->sync($data["permissions"]);
            }
        }

        return $obj;
    }

    /**
     * Delete Object
     */
    public function delete($id)
    {
        return Role::where("id", $id)->delete();
    }

    /**
     * Return Datatable
     */
    public function dataTable()
    {
        return Role::where('id','!=',1)->select('*');
    }

    /**
     * Update Status
     */
    public function action($id, $status)
    {
        $obj = Role::where("id", $id)
            ->first();

        if (!is_null($obj) & in_array($status, [0, 1])) {
            $obj->is_active = $status;
            $obj->save();
        }

        return $obj;
    }

    public function getActive()
    {
        return Role::select('*')
            ->whereNotIn("id", [1, 2])
            ->orderBy("name", "asc")
            ->get();
    }
    public function roles()
    {
        return Role::select('*')
            ->whereIn("id", [5, 6, 7])
            ->orderBy("name", "asc")
            ->get();
    }

    
}
