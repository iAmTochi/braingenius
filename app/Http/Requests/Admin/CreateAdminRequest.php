<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
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
            'username'                  => 'required|unique:users',
            'last_name'                 => 'required',
            'first_name'                => 'required',
            'other_name'                => 'nullable',
            'gender'                    => 'required',
            'dob'                       => 'required',
            'email'                     => 'required|email|unique:users',
            'address'                   => 'required',
            'type'                      => 'required',
            'phone'                     => 'required|unique:admins|max:15',
            'image'                     => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:50',

        ];
    }
}
