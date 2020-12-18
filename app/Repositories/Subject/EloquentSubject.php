<?php


namespace App\Repositories\Subject;


use App\Models\Classes\Subject;

class EloquentSubject implements SubjectRepository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($uuid)
    {
        return Subject::where('uuid',$uuid)->first();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Subject::create($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($uuid, array $data)
    {
        $subject = $this->find($uuid);
        return $subject->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($uuid)
    {
        $subject = $this->find($uuid);
        return $subject->delete();
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
        return Subject::join('departments','departments.uuid','=','subjects.dept_uuid')->get();

    }


}
