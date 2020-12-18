<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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

            'last_name'                 => 'required',
            'first_name'                => 'required',
            'other_name'                => 'nullable',
            'gender'                    => 'required',
            'dob'                       => 'required',
            'address'                   => 'required',

        ];
    }
}
