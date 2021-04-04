<?php

namespace App\Models\Classes;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;


class Classes extends Model
{
    use Uuid;

    //




    public function arms(){

        return $this->belongsToMany(Arm::class);
    }

//    public function classArms(){
//
//        return $this->hasMany(ClassArm::class,'class_uuid','uuid');
//    }
}
