<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SaveImageRequest;

use Illuminate\Http\Request;

use App\Data\Repositories\Registration\RegistrationRepository;


use Auth;
use DataTables;
use Response;
use Storage;
use Image;



class DashboardController extends Controller
{
    
   

    public function __construct(RegistrationRepository $registrationRepository) {
        $this->middleware('auth');
        $this->registrationRepository = $registrationRepository;
    }


    public function index()
    {

        $active                 = "dashboard";
        $activeSub              = "";
        $registrations          = $this->registrationRepository->getAll(); 
        $registration_count     = $registrations->count();

        $totalAmountInINR       = 0;

        foreach ($registrations as $registration) 
        {
            $amount     = $registration->amount;
            $currency   = $registration->currency;

            if ($currency === 'USD') 
            {
                $conversionRate = config('constant.conversion_rate'); 
                $amount = $amount * $conversionRate;
            }

            $totalAmountInINR += $amount;
        }

        $payment_count          = $totalAmountInINR;
        
        return view("admin.dashboard.index")
           
            ->with("active", $active)
            ->with("activeSub", $activeSub)
            ->with("tot_reg", $registration_count)
            ->with("tot_payment", $payment_count);
    }


   

     /**
     * Save Image
     */
    public function saveImage(SaveImageRequest $request)
    {
        $data = $request->all();
       
        if (isset($data['file'])) {
            $file = $data['file'];

            if (validateFile($file)) {
                return response(json_encode(["location" => ""]));
            }

            $extension = strtolower($file->getClientOriginalExtension());
            $filename = conf("img_prefix") . time() . uniqid() . ".{$extension}";

            $file->storeAs('temp', $filename);

            $temp_path = "storage/temp/{$filename}";

            // Optimize Image
            // if (conf("enable_image_optimizer")) {
            //     ImageOptimizer::optimize($temp_path);
            // }

            $img = Image::make($temp_path);
            $data["file"] = "pageContent/{$filename}";
            $storage = Storage::put($data["file"], (string) $img->encode());

            return response(json_encode(["location" => Storage::url($data["file"])]));
        }

        return response(json_encode(["location" => ""]));
    }

    
}
