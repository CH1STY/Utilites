<?php

namespace App\Http\Requests;

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
            'username' => 'required|min:3|max:30|regex:/[a-zA-Z0-9]/i',
            'first_name' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
            'last_name' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
            'date_of_birth' => 'required',
            'gender' => 'required|in:male,female,other',
            'address' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Username can't be empty...",
            'username.min' => "Username must be minimum 3 characters...",
            'username.max' => "Username can't exceed 30 characters...",
            'username.regex' => "Username must be in alphanumeric...",

            'first_name.required' => "First Name can't be empty...",
            'first_name.min' => "First Name must be minimum 3 characters...",
            'first_name.max' => "First Name can't exceed 30 characters...",
            'first_name.regex' => "First Name must be in letter...",

            'last_name.required' => "Last Name can't be empty...",
            'last_name.min' => "Last Name must be minimum 3 characters...",
            'last_name.max' => "Last Name can't exceed 30 characters...",
            'last_name.regex' => "Last Name must be in letter...",

            'date_of_birth.required' => "Date of Birth must be selected...",

            'gender.required' => "Gender must be selected...",
            'gender.in' => "Gender: Male, Female or Others...",

            'phone.required' => "Phone Number can't be empty...",
            'phone.regex' => "Phone Number is invalid...",

            'address.required' => "Address can't be empty...",
        ];
    }
}
