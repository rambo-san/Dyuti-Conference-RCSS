<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'description' => 'nullable'
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
