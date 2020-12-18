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



}
