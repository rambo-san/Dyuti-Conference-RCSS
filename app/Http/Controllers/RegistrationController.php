<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Data\Repositories\Registration\RegistrationRepository;
use App\Http\Requests\RegistrationRequest;
use App\Mail\CustomMail;
use Mail;

class RegistrationController extends Controller
{ 
    private $registrationRepository;

    public function __construct(RegistrationRepository $registrationRepository) {
        $this->registrationRepository = $registrationRepository;
    }

    public function home(){
        $active = "home";
        $activeSub = "";

        $page = 'Home';
        return view('home')
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("page",$page);
    }

    public function index()
    {
        $active = "registration";
        $activeSub = "";

        $page = 'Registration';
        return view('registration')->with("active", $active)
        //return view('registration-closed')->with("active", $active)
        ->with("activeSub", $activeSub)
        ->with("page",$page);
    }

    public function registration2()
    {
        $active = "registration";
        $activeSub = "";

        $page = 'Registration';
        return view('registration2')->with("active", $active)
        //return view('registration-closed')->with("active", $active)
        ->with("activeSub", $activeSub)
        ->with("page",$page);
    }

    public function storeReg2(Request $request)
    {
        $data = $request->all(); 
        if(isset($data['email'])){
            $email = $this->registrationRepository->check_email($data);
            if($email){
                return redirect()->back()->with('error','Email already registered, Please use another email.')->withInput();
            }
        }
        if(isset($data['passport_no']) && $data['nationality'] != 'indian'){
            $passport = $this->registrationRepository->get($data['passport_no']);
            if($passport){
                return redirect()->back()->with('error','Passport no already registered')->withInput();
            }
        }
        // if(isset($data['email'])){
        //     $passport = $this->registrationRepository->getemail($data['email']);
        //     if($passport){
        //         return redirect()->back()->with('error','Email already registered')->withInput();
        //     }
        // }
        
        $registration   = $this->registrationRepository->saveReg2($data);

        if (isset($registration['id'])) {
            Session::put('registration_id', $registration['id']);
            Session::put('form_no', '2');
        }
        return redirect('/registration3');
    }

    public function registration3()
    {
        $active = "registration";
        $activeSub = "";
        if(!isset($_GET['key'])){
            if(session('form_no') != '2'){
                return redirect()->route('registration2')->with('error','Please fill out this form.!!');
            }
        }else{
            $id = $this->registrationRepository->getRegistrationByKey($_GET['key'])->id;
            Session::put('registration_id',$id);
        }
        $page = 'Registration';
        return view('registration3')->with("active", $active)
        //return view('registration-closed')->with("active", $active)
        ->with("activeSub", $activeSub)
        ->with("page",$page);
    }

    public function storeReg3(Request $request)
    {
        $formData = $request->all();
           $validated  = $request->validate([
            'proof' => 'mimes:pdf,jpg,jpeg,png|max:10000',
        ]);
        // $formData['conference_theme'] = implode(',',$formData['conference_theme']);
        // $formData['participation_date'] = implode(',',$formData['participation_date']);
         if (isset($formData['proof'])) {

            $file = $formData['proof'];

            $extension = strtolower($file->getClientOriginalExtension());
            $filename = time() . uniqid() . ".{$extension}";

            $file->storeAs('reciept', $filename);
            $formData["proof"] = "reciept/{$filename}";
        }
        $registration = $this->registrationRepository->saveReg3($formData);
        Session::put('form_no', '3');
        return redirect('/registration4');
    }


    public function registration4()
    {
        if(!isset($_GET['key'])){
            if(session('form_no') != '3'){
                return redirect()->route('registration3')->with('error','Please fill out this form.!!');
            }
            $id = session('registration_id');
        }else{
            $id = $this->registrationRepository->getRegistrationByKey($_GET['key'])->id;
            Session::put('registration_id',$id);
        }
        
        $active = "registration";
        $activeSub = "";


        $page = 'Registration';
        $data = $this->registrationRepository->getRegistrationById($id);

        return view('registration4')
        //return view('registration-closed')
        ->with('data',$data)
        ->with("active", $active)
        ->with("activeSub", $activeSub)
        ->with("page",$page);
    }

    public function storeReg4(Request $request)
    {
        $formData   = $request->all();
        $validated  = $request->validate([
            'reciept' => 'mimes:pdf,jpg,jpeg,png|max:10000',
        ]);
        // if ($request->hasFile('reciept')) {
        //     $file = $request->file('reciept');
        //     $extension = strtolower($file->getClientOriginalExtension());
        //     $filename = time() . uniqid() . "." . $extension;

        //     if (!is_dir("temp")) {
        //         mkdir("temp", 0777, true); 
        //     }
        //     // $file->move("temp", $filename);
        //     // $temp_path = "temp/{$filename}";

        //     // $img = Image::make($temp_path);
        //     $formData["reciept"] = "registration/{$filename}";
        //     $file->move(public_path().'/icmas/storage/registration/',$filename);
        //   // dd($formData);

            
            
            
        //   //$file->move($formData["reciept"]);

        //     //File::delete($temp_path);
        // }
        
         if (isset($formData['reciept'])) {

            $file = $formData['reciept'];

            $extension = strtolower($file->getClientOriginalExtension());
            $filename = time() . uniqid() . ".{$extension}";

            $file->storeAs('reciept', $filename);
            $formData["reciept"] = "reciept/{$filename}";
        }
        Session::put('form_no', '4');

        $registration   = $this->registrationRepository->saveReg3($formData);
        //dd($registration);
        $data           = $this->registrationRepository->getRegistrationById(session('registration_id'));
        $email_data     = [
                "view_blade"    => "email.registration-success",
                "subject"       => 'New registration from '.$data['name'],
                "content"       => [
                    "name"          => $data['name'],                      
                    "phone"         => $data['phone'],
                    "email"         => $data['email'],
                    "view-link"     => env('APP_URL').'/backend-admin/registration/view/'.$data['id']
                ],
        ]; 
        
       $rslt =  Mail::to('icsd2025@rajagiri.edu')     
              ->send(new CustomMail($email_data));

        return redirect('/registration5');
    }


    public function registration5()
    {
        if(session('form_no') != '4'){
            return redirect()->route('registration4')->with('error','Please fill out this form.!!');
        }

        $active = "registration";
        $activeSub = "";
        Session::forget('registration_id');
        Session::forget('form_no');
        $page = 'Registration';
        return view('registration5')->with("active", $active)
        //return view('registration-closed')->with("active", $active)
        ->with("activeSub", $activeSub)
        ->with("page",$page);
    }

    public function email_check(Request $request){
        $data = $request->all();
        $registration = $this->registrationRepository->check_email($data);
        if($registration){
            return $registration->id;
        }
        return false;
    }

    public function send_registration_link($id = false){
        $registration = $this->registrationRepository->get_registration($id);
        //dd($registration);
        if($registration->reciept && $registration->approve_status == '0'){
            return response()->json(['response'=>'success','message'=>'This email is already registered and waiting for approval, Please register with another email or wait for approval.']);
        }
        if($registration->reciept && $registration->approve_status == '1'){
            return response()->json(['response'=>'success','message'=>'This email is already registered and registration approved, Please register with another email.']);
        }
        $url = route('home').'/registration2';
        $key = uniqid();
        $data['key'] = $key;
        if($registration){
            $registration->update($data);
        }
        if(!$registration->user_type){
            $url = route('home').'/registration3?key='.$key;
        }elseif(!$registration->reciept){
            $url = route('home').'/registration4?key='.$key;
        }
        $email_data     = [
            "view_blade"    => "email.registration-continue",
            "subject"       => 'Registration Link',
            "content"       => [
                "name"          => $registration->name,                      
                "phone"         => $registration->phone,
                "email"         => $registration->email,
                "view-link"     => $url
            ],
        ]; 
        $rslt =  Mail::to($registration->email)     
        ->send(new CustomMail($email_data));
        return response()->json(['response'=>'success','message'=>'To continue previous registration check mail.']);
    }

    public function delete_previous_registration($id){
        $registration = $this->registrationRepository->get_registration($id);
        if($registration){
            $registration->delete();
        }
        return response()->json(['response'=>'success','message'=>'']);
    }
}