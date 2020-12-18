<?php


namespace App\Repositories\Staff;


interface StaffRepository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

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
    public function update($id, array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

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

    /**
     * @return mixed
     */
    public function portalAdmin();

}
