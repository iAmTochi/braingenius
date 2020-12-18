<?php


namespace App\Repositories\Admin;


use App\Models\User\Admin;

class EloquentAdmin implements AdminRepository
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
       return Admin::create($data);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return Admin::withTrashed()->where('uuid', $id)->firstOrFail();
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
        return Admin::select(['admins.user_uuid as uuid','last_name','first_name','other_name','username','email','phone','types.name as type'])
            ->whereIn('type',['lvl04','lvl05'])
            ->join('users','users.uuid','=','admins.user_uuid')
            ->join('types','types.code','=','users.type')
            ->get();
    }

}
