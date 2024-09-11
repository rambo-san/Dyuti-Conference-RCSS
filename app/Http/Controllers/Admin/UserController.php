<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Auth;
use DataTables;
use Response;
use App\Data\Repositories\User\UserRepository;


class  UserController extends Controller
{
    
    private static $userRepository;
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(
        UserRepository $userRepository
    ) {
        $this->middleware('auth');
        self::$userRepository = $userRepository;
    }
   
    public function index()
    {
        $active = "user";
        $activeSub = "";

        
        return view("admin.user.index")
            ->with("active", $active)
            ->with("activeSub", $activeSub);
    }

    /**
     * DataTable Response
     */
    public function result(Request $request)
    {
        $results = self::$userRepository->dataTable();
        
        return DataTables::of($results)
                ->editColumn('is_active', function ($results) {
                            if($results->is_active==1) return "Active"; else return "Inactive";
                        })
                ->escapeColumns([])
                ->setRowId('Id')
                ->make(true);
    }
    public function myprofile()
    { 
        $active = "user";
        $activeSub = "";
        $user = self::$userRepository->get(auth()->user()->id);    
        return view("admin.myprofile.index")
                 ->with("active", $active)
                ->with("activeSub", $activeSub)
                ->with('user',$user);
    }
    public function myprofile_update(ProfileUpdateRequest $request)
    {
        $data = $request->all();
        $category = self::$userRepository->createUpdate($data, Auth::user()->id);      

        return redirect()->to(route("myprofile.index"))
            ->with('success', "Profie Updated");
    }


   

    

    
}
