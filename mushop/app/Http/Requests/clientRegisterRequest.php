<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientRegisterRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'password' => 'required|string|min:8'
        ];

        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'the name is required please',
            'email.required' => 'Please Enter Your Email',
            'email.email' => 'Please Enter A Valid Email',
            'email.unique' => 'This Email Already Exists',
            'password.required' => 'password is required please',
            'password.string' => 'password must be chars and numbers',
            'password.min:8' => 'password can be at least 8 characters'
        ];
    }
}
