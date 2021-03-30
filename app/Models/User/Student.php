<?php

namespace App\Models\User;

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
        'admin_num',
        'last_name',
        'first_name',
        'other_name',
        'phone',
        'address',
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

    //
}
