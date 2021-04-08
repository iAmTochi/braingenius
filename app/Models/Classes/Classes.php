<?php

namespace App\Models\Classes;

use App\Models\User\Student;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;


class Classes extends Model
{
    use Uuid;

    //




    public function arms(){

        return $this->belongsToMany(Arm::class);
    }



    public function students(){

        return $this->hasMany(Student::class,'class_uuid','uuid');
    }
}
