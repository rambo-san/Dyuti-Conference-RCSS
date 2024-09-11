<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->redirect = url()->previous().'#message-form';

        $rules = [
            'title' => 'required|integer', // Example rule for 'title' field
            'name' => 'required|string|max:255',
            'designation' => 'required|integer',
            'gender' => 'required|in:m,f,t',
            'organization' => 'required|string|max:255',
            'nationality' => 'required|string|max:100',
            'passport_no' => 'nullable',
            'discipline' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'presenting_paper' => 'required|in:0,1',
            'country_type' => 'required|in:Indian,SAARC,Others',
            'user_type' => 'required|in:Professional,Student',
            'conference_theme' => 'required|string|max:100',
            'no_of_days' => 'required|string|max:100',
            'participation_date' => 'required|string|max:100',
            'accomodation' => 'required|in:0,1',
            'food' => 'required|in:0,1',
            'reciept' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'currency' => 'required|in:INR,USD',
         ];
         if($this->nationality == 'indian'){
            $res['passport_no'] = 'required|string|max:100';
         }
         return  $rules;
    }

    public function messages()
    {
        return [];
    }

    protected function prepareForValidation()
    {
        $rules = $this->rules();
        $data = cleanRequest($rules, $this);
        $this->replace($data);
    }
}
