<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        return [
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'refurl'   => 'nullable',
            'remember' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => "Invalid Credentials",
        ];
    }

    protected function prepareForValidation()
    {
        $data = cleanRequest($this->rules(), $this);

        $this->replace($data);
    }
}
