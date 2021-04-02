<?php

namespace App\Models\User;


use App\Traits\DeleteFile;
use App\Traits\UserUuidRouteKeyName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardian extends Model
{
    use UserUuidRouteKeyName,
        SoftDeletes,
        DeleteFile;

    protected $fillable = [
        'user_uuid',
        'title',
        'last_name',
        'first_name',
        'other_name',
        'email',
        'phone',
        'house_address',
        'office_address',
        'occupation',
        'next_kin',
        'next_kin_phone',
        'image',
        'created_by',
        'updated_by',
    ];




}
