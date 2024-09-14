<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\ContactRequest;
use App\Data\Models\Contact;
use App\Mail\CustomMail;
use Mail;

class FrontendController extends Controller
{ 
    

    public function __construct() {
        
    }

    public function aboutus(){
        $active = "aboutus";
        $activeSub = "";

        $page = 'About Us';
        return view('home.aboutus')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function accommodation(){
        $active = "accommodation";
        $activeSub = "";

        $page = 'Accommodation';
        return view('home.accomodation')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function brochure(){
        $active = "brochure";
        $activeSub = "";

        $page = 'Brochure';
        return view('home.brochure')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function call_for_papers(){
        $active = "call_for_papers";
        $activeSub = "";

        $page = 'Call for Papers/Proposals';
        return view('home.call_for_papers')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function contact_us(){
        $active = "contact_us";
        $activeSub = "";

        $page = 'Contact Us';
        return view('home.contact_us')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function important_dates(){
        $active = "important_dates";
        $activeSub = "";

        $page = 'Important Dates';
        return view('home.important_dates')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function organizing_committee(){
        $active = "organizing_committee";
        $activeSub = "";

        $page = 'Organising Committee';
        return view('home.organizing_commitee')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function partners(){
        $active = "partners";
        $activeSub = "";

        $page = 'Our Partners';
        return view('home.partners')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    } 
    public function speakers(){
        $active = "speakers";
        $activeSub = "";

        $page = 'Speakers';
        return view('home.speakers')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function tourist_attraction(){
        $active = "tourist_attraction";
        $activeSub = "";

        $page = 'Tourist Attraction';
        return view('home.tourist_attraction')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function tracks(){
        $active = "tracks";
        $activeSub = "";

        $page = 'Sub-theme';
        return view('home.tracks')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_1(){
        $active = "track_1";
        $activeSub = "";

        $page = 'Track 1';
        return view('home.track_1')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_2(){
        $active = "track_2";
        $activeSub = "";

        $page = 'Track 2';
        return view('home.track_2')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_3(){
        $active = "track_3";
        $activeSub = "";

        $page = 'Track 3';
        return view('home.track_3')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_4(){
        $active = "track_4";
        $activeSub = "";

        $page = 'Track 4';
        return view('home.track_4')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_5(){
        $active = "track_5";
        $activeSub = "";

        $page = 'Track 5';
        return view('home.track_5')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_6(){
        $active = "track_6";
        $activeSub = "";

        $page = 'Track 6';
        return view('home.track_6')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_7(){
        $active = "track_7";
        $activeSub = "";

        $page = 'Track 7';
        return view('home.track_7')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_8(){
        $active = "track_8";
        $activeSub = "";

        $page = 'Track 8';
        return view('home.track_8')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function track_9(){
        $active = "track_9";
        $activeSub = "";

        $page = 'Track 9';
        return view('home.track_9')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function contact_save(ContactRequest $request){
        $data = $request->all();
        $contact = Contact::create($data);
        $email_data = [
            "view_blade" => "email.contact",
            "subject" => 'Enquiry Request from '.$data['name'],
            
            "content" => [
               
               "name" => $data['name'],                      
               "phone" => $data['phone'],
               "email" => $data['email'],
               "message" => $data['description']
            ],
        ];
        $rslt=  Mail::to('intlcon2024@rajagiri.edu')     //set admin mail
               //->cc(conf('email_cc'))
               ->send(new CustomMail($email_data));
        return redirect()->back()->with('success','Form submitted successfully.');
    } 
    public function fee_details(){
        $active = "fee_details";
        $activeSub = "";

        $page = 'Fee Details';
        return view('home.fee_details')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
    public function travel_details(){
        $active = "travel_details";
        $activeSub = "";

        $page = 'Travel Details';
        return view('home.travel_details')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }
}
