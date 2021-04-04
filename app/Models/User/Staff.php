<?php

namespace App\Models\User;

use App\Traits\DeleteFile;
use App\Traits\UserUuidRouteKeyName;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Staff extends Model
{
    use SoftDeletes,
        UserUuidRouteKeyName,
        DeleteFile;

    protected $fillable = [
        'user_uuid',
        'title',
        'last_name',
        'first_name',
        'other_name',
        'email',
        'phone',
        'address',
        'dob',
        'gender',
        'type',
        'house_uuid',
        'grade_level',
        'rank',
        'academic_qualification',
        'department',
        'image',
        'created_by',
        'updated_by',
    ];



    public function user(){
        return $this->belongsTo(User::class,'user_uuid','uuid');
    }




    /**
     * @return mixed
     */
    public function staffs() {

        return $this->select(['last_name','first_name','other_name','username','email','phone','staff.user_uuid as uuid'])
            ->where('type','lvl03')
            ->join('users','users.uuid','=','staff.user_uuid')->get();
    }

    /**
     * @return mixed
     */
    public function portalAdmin()
    {
        return $this->select(['staff.user_uuid as uuid','last_name','first_name','other_name','username','email','phone'])
            ->join('users','users.uuid','=','staff.user_uuid')
//            ->orWhere('type', 'admin 05')
//            ->orWhere('type', 'admin 03')
            ->whereIn('staff.type',['admin 05','admin 04','admin 03'])
            ->get();
    }
}
