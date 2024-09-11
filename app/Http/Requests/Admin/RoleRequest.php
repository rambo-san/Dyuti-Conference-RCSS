<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'id' => 'required',
            'name' => 'required|max:255|unique:roles,name,'.$this->id,
            'permissions' => 'max:500',
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
