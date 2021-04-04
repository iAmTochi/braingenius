<?php

namespace App\Models\User;

use App\Models\User;
use App\Traits\DeleteFile;
use App\Traits\UserUuidRouteKeyName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes,
        UserUuidRouteKeyName,
        DeleteFile;

    protected $fillable = [
        'user_uuid',
        'admin_no',
        'last_name',
        'first_name',
        'other_name',
        'dob',
        'gender',
        'image',
        'state_id',
        'lga_id',
        'house_uuid',
        'class_arm_uuid',
        'resident_type',
        'guardian_uuid',
        'genotype_id',
        'religion_id',
        'class_arm_reg_uuid',
        'session_reg_uuid',
        'graduated',
        'graduated_date',
        'graduate_class_arm_uuid',
        'graduate_session_uuid',
        'dropout',
        'dropout_date',
        'dropout_class_arm_uuid',
        'dropout_session_uuid',
        'dropout_reason',
        'prev_sch_attended',
        'prev_sch_attended_date',
        'created_by',
        'updated_by',
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_uuid','uuid');
    }

    public function students() {

        return $this->select(['last_name','first_name','other_name','username','image','gender',
            'students.user_uuid as uuid','classes.name as class','sport_houses.name as house',
            'classes.name as class','arms.arm as arm',
        ])
            ->join('class_arms','class_arms.uuid','=','students.class_arm_uuid')
            ->join('arms','arms.uuid','=','class_arms.arm_uuid')
            ->join('classes','classes.uuid','=','class_arms.class_uuid')
            ->join('sport_houses','sport_houses.uuid','=','students.house_uuid')
            ->join('users','users.uuid','=','students.user_uuid')->get();
    }
}
