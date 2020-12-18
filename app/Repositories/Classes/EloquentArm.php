<?php


namespace App\Repositories\Classes;


use App\Models\Classes\Arm;

class EloquentArm implements ArmRepository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
       return Arm::find($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Arm::create($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        $arm = $this->find($id);

        $arm->update($data);

        return $arm;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $arm = $this->find($id);

        return $arm->delete();
    }

    /**
     * @return mixed
     */
    public function count()
    {
        return Arm::count();
    }


    /**
     * @param int $count
     * @return mixed
     */
    public function latest($count = 20)
    {
        return Arm::orderBy('created_at', 'DESC')
            ->limit($count)
            ->get();
    }

    /**
     * @return Arm[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function all()
    {
        return Arm::all();
    }


}
