<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordChangeRequest extends FormRequest
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
            'password' => 'required|min:3|max:8',
        ];
    }
    public function messages()
    {
        return [
          
            'password.required' => "Password can't be empty...",
            'password.min' => "Password must be minimum 3 characters...",
            'password.max' => "Password can't exceed 8 characters...",


        ];
    }
}
