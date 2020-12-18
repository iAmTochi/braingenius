<?php


namespace App\Repositories\Configurations;


interface SessionsRepository
{

    /**
     * @param $id
     * @return mixed
     */
    public function find($id);



    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);



    /**
     * @return mixed
     */
    public function count();

    /**
     * @return mixed
     */
    public function current_session();

    /**
     * @param $current_session
     * @return mixed
     */
    public function auto_next_session_info(array $current_session);

}
