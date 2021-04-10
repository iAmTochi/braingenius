<?php


namespace App\Traits\User;


trait CreateUserData
{
    /**
     * @param $request
     * @return mixed
     */
    private function adminRequest($request){
        return $data = $request->only([
            'last_name',
            'first_name',
            'other_name',
            'email',
            'phone',
            'address',
            'dob',
            'gender',
        ]);
    }


    /**
     * @param $request
     * @return mixed
     */
    private function staffRequest($request){
        return $data = $request->only([
            'title',
            'last_name',
            'first_name',
            'other_name',
            'email',
            'phone',
            'address',
            'dob',
            'gender',
            'role',
            'grade_level',
            'rank',
            'academic_qualification',
        ]);
    }

    /**
     * @param $request
     * @param $guard_user_uuid
     * @return array
     */
    private function guardianData($request, $guard_user_uuid ){
        return $data = [
            'user_uuid'     => $guard_user_uuid,
            'title'         => $request->title,
            'last_name'     => $request->p_last_name,
            'first_name'    => $request->p_first_name,
            'other_name'    => $request->p_other_name,
            'email'     => $request->p_email,
            'phone'     => $request->p_phone,
            'image'     => $request->p_last_name,
            'house_address'     => $request->home_address,
            'office_address'    => $request->office_address,
            'occupation'        => $request->occupation,
            'next_kin'          => $request->next_kin,
            'next_kin_phone'    => $request->next_kin_phone,
            'created_by'        => auth()->user()->uuid,
        ];
    }


    /**
     * @param $request
     * @param $stud_user_uuid
     * @param $guard_user_uuid
     * @param $current_session
     * @return array
     */
    private function studentData($request,$stud_user_uuid, $guard_user_uuid, $current_session ){

        return $data = [
            'user_uuid'     => $stud_user_uuid,
            'guardian_uuid' => $guard_user_uuid,
            'admin_no'     => $request->admin_no,
            'last_name'     => $request->last_name,
            'first_name'    => $request->first_name,
            'other_name'    => $request->other_name,
            'dob'           => $request->dob,
            'gender'        => $request->gender,
            'state_id'           => $request->soo,
            'lga_id'             => $request->lga,
            'house_uuid'         => $request->sport_house,
            'class_arm_uuid'     =>$request->class_arm_reg,
            'class_arm_reg_uuid' => $request->class_arm_reg,
            'resident_type'      => $request->residence_type,
            'genotype_id'       => $request->genotype,
            'religion_id'       => $request->religion,
            //'session_reg_uuid'  => $this->currentSession()->uuid,
            'session_reg_uuid'  => $current_session,
            'prev_sch_attended'     => $request->prev_sch,
            'prev_sch_attended_date'=> $request->date_prev_sch,
            'created_by'            => auth()->user()->uuid,
        ];

       
    }



}
