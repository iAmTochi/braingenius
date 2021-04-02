<?php

namespace App\Http\Requests\User\Student;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            'admin_no'      => 'string|max:50|nullable',
            'last_name'     => 'required|string|max:50',
            'first_name'    => 'required|string|max:50',
            'other_name'    => 'string|max:50|nullable',
            //'phone'         => 'required|string|max:15|unique:students',
            'home_address'  => 'required|string',
            'dob'           => 'required|string|max:50',
            'gender'        => 'required',
            //'image'         => 'required',
            'soo'           => 'required',
            'lga'           => 'required',
            'sport_house'   => 'string|required',
            'class_arm'     => 'string|nullable',
            //'guardian_uuid'     => 'string|required',
            'genotype'      => 'string|nullable',
            'religion'      => 'string|nullable',
            'residence_type'=> 'required',


            'prev_sch'      => 'required',
            'date_prev_sch' => 'required',

            'p_type'        => 'string|nullable',
            'p_username'    => 'string|nullable',
            'p_title'       => 'string|nullable',
            'p_last_name'   => 'string|required',
            'p_first_name'  => 'string|required',
            'p_other_name'  => 'string|nullable',
            'p_email'       => 'string|required',
            'p_phone'       => 'string|required',
            'occupation'    => 'string|nullable',
            'office_address'    => 'string|nullable',
            'next_of_kin'       => 'string|required',
            'next_of_kin_phone' => 'string|required',

        ];
    }
}
