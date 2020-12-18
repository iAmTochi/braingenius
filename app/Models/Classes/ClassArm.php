<?php

namespace App\Models\Classes;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;


class ClassArm extends Model
{
    use Uuid;
    //

    protected $fillable = [
      'arm_uuid',
      'class_uuid',
      'visibility',
      'updated_by',
      'created_by',

    ];

    public function arms(){

        return $this->hasMany(Arm::class,'uuid','uuid');
    }

    public function classes(){

        return $this->hasMany(Classes::class);

    }
}
