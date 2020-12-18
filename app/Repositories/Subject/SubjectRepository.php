<?php


namespace App\Repositories\Subject;


interface SubjectRepository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($uuid);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($uuid, array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($uuid);

    /**
     * @return mixed
     */
    public function count();

    /**
     * @param int $count
     * @return mixed
     */
    public function latest($count = 20);

    /**
     * @return mixed
     */
    public function all();



}
