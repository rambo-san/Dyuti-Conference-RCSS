<?php

namespace App\Http\Controllers\Admin;
use Auth;
use DataTables;
use Response;
use Image;
use File;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data\Repositories\Contact\ContactRepository;

class ContactController extends Controller 
{
    private static $contactRepository;
    private static $contactcategoryRepository;
    private static $CenterGroupRepository;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(
        ContactRepository $contactRepository
    ) {
        self::$contactRepository = $contactRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        $active = "contact";
        $activeSub = "";
        
        return view("admin.contact.index")
            ->with("active", $active)
            ->with("activeSub", $activeSub);
    }

    public function result()
    {
        $results = self::$contactRepository->dataTable();
        return DataTables::of($results)
        ->addColumn('view', function ($result) {
            return '<a href="'.route('contact.view', [$result->id]).'"><i class="fa fa-eye"></i></a>';
            
        }) 
            ->escapeColumns([])
            ->setRowId('Id')
            ->make(true);
    }

    public function view($id){
        $result = self::$contactRepository->get($id);
        $active = "contact";
        $activeSub = "";
        
        return view("admin.contact.view")
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with('result',$result);
    }


}
