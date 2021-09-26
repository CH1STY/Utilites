<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoeditRequest extends FormRequest
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
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ];
    }
    public function messages()
    {
        return [

            'image.required' => "Profile Picture must be uploaded...",
            'image.mimes' => "Profile Picture should be in jpeg, png, jpg, gif, svg format...",
            'image.max' => "The size of Profile Picture must be lower than 6048 kb...",
        ];
    }


}
