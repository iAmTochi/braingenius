<?php


namespace App\Repositories\Configurations;


use App\Models\Sessions\Session;

class EloquentSessions implements SessionsRepository
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
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * @return mixed
     */
    public function count()
    {
        // TODO: Implement count() method.
    }

    /**
     * @param $current_session
     * @return mixed
     */
    public function auto_next_session_info(array $current_session)
    {
        // TODO: Implement auto_next_session_info() method.
    }

    /**
     * @return mixed
     */

}
