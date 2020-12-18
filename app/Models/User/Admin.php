<?php

namespace App\Models\User;

use App\Traits\DeleteFile;
use App\Traits\UserUuidRouteKeyName;
use App\Traits\Uuid;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Admin extends Model
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
        'phone',
        'address',
        'dob',
        'gender',
        'image',
        'created_by',
        'updated_by',
    ];




    public function user(){
        return $this->belongsTo(User::class,'user_uuid','uuid');
    }




}
