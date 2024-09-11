<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;


class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'id' => 'required|max:50',
            "name"=>'required|max:255',
            //"email" =>'required|max:255|unique:users,email,'.$this->id,
            'password' => 'nullable|confirmed|max:255',
            'password_confirmation' => 'required_with:password|max:255',

        ];
    }

    public function messages()
    {
        return [];
    }

    protected function prepareForValidation()
    {
        $data = cleanRequest($this->rules(), $this);

        $this->replace($data);
    }
}
