<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class CreateStaffRequest extends FormRequest
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
            'title'                     => 'required',
            'last_name'                 => 'required',
            'first_name'                => 'required',
            'other_name'                => 'nullable|required',
            'gender'                    => 'required',
            'dob'                       => 'required',
            'email'                     => 'required|email|unique:users',
            'address'                   => 'required',
            'role'                      => 'required',
            'rank'                      => 'nullable|required',
            'academic_qualification'    => 'required',
            'grade_level'               => 'required|numeric',
            'phone'                     => 'required',
            'sportHouse'                => 'nullable',
            'department'                => 'nullable',
            'image'                     => 'nullable',
        ];
    }
}
