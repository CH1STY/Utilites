<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            'username' => 'required|unique:users|min:5|max:30|regex:/[a-zA-Z0-9]/i',
            'password' => 'required|min:6|max:30',
            'email' => 'required|unique:users|email|max:50|min:10',
            'first_name' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
            'last_name' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
            'date_of_birth' => 'required',
            'gender' => 'required|in:male,female,other',
            'address' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'usertype' => 'required|in:User,Volunteer',
            'national_id' => 'required|digits:9',
            'myfile' => 'required|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Username can't be empty...",
            'username.unique' => "Username has already been taken...",
            'username.min' => "Username must be minimum 5 characters...",
            'username.max' => "Username can't exceed 30 characters...",
            'username.regex' => "Username must be in alphanumeric...",

            'password.required' => "Password can't be empty...",
            'password.min' => "Password must be minimum 6 characters...",
            'password.max' => "Password can't exceed 30 characters...",

            'email.required' => "Email can't be empty...",
            'email.email' => "Email format is invalid...",
            'email.unique' => "Email has already been taken...",
            'email.min' => "Email must be minimum 10 characters...",
            'email.max' => "Email can't exceed 50 characters...",
          


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

            'usertype.required' => "User Type category must be selected...",
            'usertype.in'  => "Select Usertype: User or Volunteer",

            'national_id.required' => "NID Number must be filled up...",
            'national_id.digits' => "NID Number is invalid...",

            'myfile.required' => "Profile Picture must be uploaded...",
            'myfile.mimes' => "Profile Picture should be in jpeg, png, jpg, gif, svg format...",
            'myfile.max' => "The size of Profile Picture must be lower than 6048 kb...",
        ];
    }
}
