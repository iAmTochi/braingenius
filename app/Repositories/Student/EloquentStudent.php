<?php


namespace App\Repositories\Student;


use App\Models\Student\Student;
use App\Repositories\StudentRepository;

class EloquentStudent implements StudentRepository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Student::create($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
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
        // TODO: Implement all() method.
    }

    public function withdraw()
    {
        // TODO: Implement withdraw() method.
    }

    public function graduate()
    {
        // TODO: Implement graduate() method.
    }

}
