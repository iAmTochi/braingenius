<?php


namespace App\Repositories\Classes;


use App\Models\Classes\ClassArm;

class EloquentClassArm implements ClassArmRepository
{

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return ClassArm::find($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return ClassArm::create($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        $classArm = $this->find($id);
        return $classArm->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $classArm  = $this->find($id);
        return $classArm->delete();
    }

    /**
     * @return mixed
     */
    public function count()
    {
        return ClassArm::count();

    }

    /**
     * @param int $count
     * @return mixed
     */
    public function latest($count = 20)
    {
        // TODO: Implement latest() method.
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return ClassArm::select(['class_arms.uuid as id','name','arm'])
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
        return ClassArm::where('class_uuid',$class)->where('arm_uuid',$arm)->count();

    }
}
