<?php


namespace App\Repositories\Department;


use App\Models\Classes\Department;

class EloquentDepartment implements DepartmentRepository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Department::find($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Department::create($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        $dept = $this->find($id);
        return $dept->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $dept = $this->find($id);
        return $dept->delete();
    }

    /**
     * @return mixed
     */
    public function count()
    {
        // TODO: Implement count() method.
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
        return Department::all();
    }


}
