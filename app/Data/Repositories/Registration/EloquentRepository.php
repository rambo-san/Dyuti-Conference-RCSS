<?php

namespace App\Data\Repositories\Registration;

use App\Data\Models\Registration;
use Illuminate\Http\UploadedFile;

class EloquentRepository implements RegistrationRepository
{
    public function saveReg2(array $data)
    {
        $registration = new Registration($data);
        $registration->save();
        return $registration;
    }

    public function saveReg3(array $formData)
    {

        $registration = Registration::find(session('registration_id'));

        if (!$registration) {
        
            return null;
        }

        $registration->update($formData);

        return $registration;
    }

    public function saveReg4($file)
    {
       
        $directory = 'uploads';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }

        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        $file->storeAs($directory, $filename);

        $registration = Registration::find(session('registration_id'));

        if (!$registration) {
            return null;
        }

        $registration->reciept = $imageName;
        $registration->save();

        return $registration;
    }

    public function getRegistrationById($id)
    {
        $registration = Registration::find($id);

        return $registration;
    }

    public function getTrashedRegistrationById($id)
    {
        $registration = Registration::withTrashed()->find($id);

        return $registration;
    }

    public function get($passport){
        return Registration::where('passport_no',$passport)->first();
    }
    public function getemail($email){
        return Registration::where('email',$email)->first();
    }

    public function getAll(){
        return Registration::all();
    }

    public function approve($id)
    {
        $registration = Registration::find($id);

        if ($registration) {
        
            $registration->approve_status = 1;
            $registration->save();
            return 1;
        } 
        else 
        {
            return 0;
        }

    }

    public function delete($id)
    {
        $registration = Registration::find($id);
        $registration->delete();

    }

    public function get_registration($id)
    {
        $registration = Registration::where('id',$id)->withTrashed()->first();
        return $registration;

    }
    public function getRegistrationByKey($key){
        $registration = Registration::where('key',$key)->first();
        return $registration;
    }

    public function getAllArchive()
    {
        $softDeletedRecords = Registration::onlyTrashed()->get();

        return $softDeletedRecords;
    }

    public function restore($id)
    {
        $registration = Registration::withTrashed()->find($id);

        if ($registration) {
            $registration->restore();
            return redirect()->route('archived-registration')->with('success', 'Record restored successfully.');
        } else {
            return redirect()->route('archived-registration')->with('error', 'Record not found.');
        }
    }

    public function forceDelete($id)
    {
        $registration = Registration::withTrashed()->find($id);

        if ($registration) {
            $registration->forceDelete();
            return redirect()->route('archived-registration')->with('success', 'Record permanently deleted.');
        } else {
            return redirect()->route('archived-registration')->with('error', 'Record not found.');
        }
    }

    public function check_email(array $data){
        return Registration::where('email',$data['email'])->first();
    }



}
