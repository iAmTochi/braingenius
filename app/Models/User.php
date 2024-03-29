<?php

namespace App\Models;

use App\Models\User\Admin;
use App\Models\User\Guardian;
use App\Models\User\Staff;
use App\Models\User\Student;
use App\Models\User\Type;
use App\Traits\Uuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Uuid, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
//        'email',
        'password',
        'status',
        'username',
        'type'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function updateLoginCount(){

    }


    public function isSuperAdmin(){
        return $this->type == 'lvl05';
    }
    public function isAdmin(){
        return $this->type == 'lvl04';
    }

    public function isStaff(){
        return $this->type == 'lvl03';
    }

    public function isParent(){
        return $this->type == 'lvl02';
    }


    public function isStudent(){
        return $this->type == 'lvl01';
    }

    public function admin(){
        return $this->belongsTo(Admin::class,'uuid','user_uuid');
    }

    public function staff(){
        return $this->belongsTo(Staff::class,'uuid','user_uuid');
    }

    public function guardian(){
        return $this->belongsTo(Guardian::class,'uuid','user_uuid');
    }
    public function student(){
        return $this->belongsTo(Student::class,'uuid','user_uuid');
    }

    public function userType(){
        return $this->belongsTo(Type::class,'type','code');
    }


}
