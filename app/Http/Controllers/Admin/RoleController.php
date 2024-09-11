<?php

namespace App\Http\Controllers\Admin;

use Auth;
use DataTables;
use Response;
use Storage;
use App\Data\Repositories\Permission\PermissionRepository;
use App\Data\Repositories\Role\RoleRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleRequest;

class RoleController extends Controller
{
    private static $roleRepository;
    private static $permissionRepository;

    public function __construct(
        RoleRepository $roleRepository,
        PermissionRepository $permissionRepository
    ) {
        self::$roleRepository = $roleRepository;
        self::$permissionRepository = $permissionRepository;
      

        $this->middleware('auth');
    }

    /**
     * Shows create/update Role form
     */
    public function index()
    {
        $active = "role";
        $activeSub = "";

        
        return view("admin.role.index")
            ->with("active", $active)
            ->with("activeSub", $activeSub);
    }

    /**
     * DataTable Response
     */
    public function result()
    {
        $results = self::$roleRepository->dataTable();
        return DataTables::of($results)
            ->addColumn('edit', function ($result) {
                  if($result->id > 2){
                    $html= actionButtons([
                        "edit" => route('role.edit', [$result->id])
                    ]);
                

                    return $html;
                }
                else{
                     return "<span><i class='fa fa-edit '></i></sapn>";
                }

            })

             ->addColumn('delete', function ($result) {
                if($result->id > 3){
                    return  actionButtons([
                       "deleteAjax" => [
                            "id" => $result->id,
                            "function" => "confirm",
                        ],
                    ]);
                }
                else
                {
                    return '';
                }

            })
            
            ->escapeColumns([])
            ->setRowId('Id')
            ->make(true);
    }

    /**
     * Shows create/update Role form
     */
    public function createUpdate($role_id = false)
    {
        $active = "role";
        $activeSub = "";

        $role = null;
        if ($role_id == false) {
            $role = self::$roleRepository->getDummy();
        } else {
            $role = self::$roleRepository->get($role_id);
        }

        

        $permission_list = self::$permissionRepository->all();
        $permission = [];
        $permission_key_data = [];
        foreach($permission_list as $p_list)
        {
            $permission_data = explode(" ",$p_list->name);
            if(isset($permission_data[1]))
            {
               
                    $permission[$permission_data[1]] = [
                         'view' =>[],
                         'add'=>[],
                        'edit' =>[],
                        'delete' =>[]
                    ];
                    
            }
        }

        foreach($permission_list as $p_list)
        {
            $permission_data = explode(" ",$p_list->name);
            if(isset($permission_data[1]))
            {
                foreach($permission as $key=> $perm)
                {
                    if($permission_data[1] ==$key )
                    {

                       
                        $permission[$key][$permission_data[0]] = [

                                                            'type' => $permission_data[0],              
                                                            'id' => $p_list->id,
                                                            'name' => $p_list->name
                                                        ];

                    }
                }
                    
            }
        }

        

        return view("admin.role.createUpdate")
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("permission_grouped", $permission)
            ->with("permission_list", $permission_list)
            ->with("result", $role);
    }

    /**
     * Adds a role to storage
     */
    public function createUpdatePost(RoleRequest $request)
    {
        $data = $request->all();


        $data["permissions"] = $data["permissions"] ?? [];

        $role = self::$roleRepository->createUpdate($data, $data['id']);
        

        return redirect()->to(route("role.edit",[$role->id]))
            ->with('success', ($data['id'] == 0) ? "Role added" : "Role updated");
    }

    /**
     * Update Status - Enable/Disable
     */
    public function action($role_id, $status)
    {
        $role_id = clean($role_id);
        $status = clean($status);

        

        self::$roleRepository->action($role_id, $status);

        return Response::json(['response' => 'success', 'message' => "Status updated"]);
    }

    public function destroy($id)
    {
        $id = clean($id);
        if($id <= 5){
            return Response::json(['response' => 'fail', 'message' => "Not allowed to delete"]);
        }

        $reslt = self::$roleRepository->delete($id);
        if($reslt){
             return Response::json(['response' => 'success', 'message' => "Role Deleted"]);
        }
        return Response::json(['response' => 'fail', 'message' => "Deleting content not found"]);
    }
}
