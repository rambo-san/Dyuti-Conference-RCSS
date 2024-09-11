<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password' => 'required|max:255|regex:' . conf("password_format") . "|confirmed",
            'password_confirmation' => 'required|max:255|regex:' . conf("password_format"),
            'token' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => conf("password_message"),
        ];
    }

    protected function prepareForValidation()
    {
        $data = cleanRequest($this->rules(), $this);

        $this->replace($data);
    }
}
