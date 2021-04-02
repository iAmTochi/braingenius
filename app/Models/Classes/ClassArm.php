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


    /**
     * @return mixed
     */

    public function  classArms()
    {
        return $this->select(['class_arms.uuid as uuid','name','arm'])
            ->join('arms','arms.uuid','=','class_arms.arm_uuid')
            ->join('classes','classes.uuid','=','class_arms.class_uuid')->get();
//        return DB::table('class_arms')->select(['name','arm'])
//            ->join('arms','arms.uuid','=','class_arms.arm_id')
//            ->join('classes','classes.uuid','=','class_arms.class_id')->get();
    }

    /**
     * @param $class
     * @param $arm
     * @return mixed
     */
    public function isClassArmExist($class, $arm)
    {
        return $this->where('class_uuid',$class)->where('arm_uuid',$arm)->count();

    }
}
