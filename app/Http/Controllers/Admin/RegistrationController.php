<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use DataTables;
use Response;

use App\Data\Repositories\Registration\RegistrationRepository;
use App\Mail\CustomMail;
use Mail;

class RegistrationController extends Controller
{

    public function __construct(RegistrationRepository $registrationRepository) {
        $this->middleware('auth');
        $this->registrationRepository = $registrationRepository;
    }


    public function index()
    {

        $active     = "registration";
        $activeSub  = "";
        $data       = $this->registrationRepository->getAll();
        
        return view("admin.registration.index")
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("data", $data);
    }

    public function view($id)
    {
        $active     = "registrations";
        $activeSub  = "";
        $data       = $this->registrationRepository->getRegistrationById($id);
        
        return view("admin.registration.view")
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("data", $data);
    }

    public function archiveView($id)
    {
        $active     = "registrations";
        $activeSub  = "";
        $data       = $this->registrationRepository->getTrashedRegistrationById($id);
        
        return view("admin.registration.archive-view")
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("data", $data);
    }

    public function approve($id)
    {
        $active     = "approve";
        $activeSub  = "";
        $data       = $this->registrationRepository->getRegistrationById($id);
        
        return view("admin.registration.approve")
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("data", $data);
    }

    public function approval($id)
    {
        $data       = $this->registrationRepository->approve($id);
        $details    = $this->registrationRepository->getRegistrationById($id);

        if($data==1)
        {
            $email_data = [
                "view_blade" => "email.approve",
                "subject" => 'Confirmation of Registration Approval',
                
                "content" => [
                   
                ],
            ];
            $rslt=  Mail::to($details['email'])    
                   ->send(new CustomMail($email_data));

            session()->flash('success', 'Approved');
            return redirect()->route('registration');
        }
    }

    public function delete($id)
    {
        $data       = $this->registrationRepository->delete($id);
        session()->flash('success', 'Registration Archived');
        return redirect()->route('registration');
    }

    public function archived_registrations()
    {
        $active     = "archive-registration";
        $activeSub  = "";
        $data       = $this->registrationRepository->getAllArchive();
        
        return view("admin.registration.archive-registration")
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("data", $data);
    }

    public function restore($id)
    {
        $data       = $this->registrationRepository->restore($id);
        session()->flash('success', 'Registration Restored');
        return redirect()->route('archived-registration');
    }

    public function forceDelete($id)
    {
        $data       = $this->registrationRepository->forceDelete($id);
        session()->flash('warning', 'Deleted');
        return redirect()->route('archived-registration');
    }

    
}
