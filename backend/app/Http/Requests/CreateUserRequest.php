<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'first_name' => 'required|string|between:2,75',
            'last_name'  => 'required|string|between:2,75',
            'email'      => 'required|string|email|between:5,75|unique:users',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'between'  => 'The :attribute value :input is not between :min - :max.',
            'unique'   => 'The :attribute must be exactly :unique.',
        ];
    }

    /**
    * Get custom attributes for validator errors.
    *
    * @return array
    */
    public function attributes()
    {
        return [
            'first_name' => 'First Name',
            'last_name'  => 'Last Name',
            'email'      => 'Email Address',
        ];
    }
}
