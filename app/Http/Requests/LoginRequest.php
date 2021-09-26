<?php

namespace App\Http\Requests;

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
            'email' => 'required|email:rfc|max:50|min:10',
            'password' => 'required|min:3|max:20',
        ];
    }
    public function messages()
    {
        return [
          
            'password.required' => "Password can't be empty...",
            'password.min' => "Password must be minimum 3 characters...",
            'password.max' => "Password can't exceed 20 characters...",

            'email.required' => "Email can't be empty...",
            'email.min' => "Email must be minimum 10 characters...",
            'email.max' => "Email can't exceed 50 characters...",
            'email.email' => "Email format is invalid...",


        ];
    }
}
