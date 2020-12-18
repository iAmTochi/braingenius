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




}
