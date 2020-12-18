<?php


namespace App\Repositories\Staff;


use App\Models\User\Staff;

class EloquentStaff implements StaffRepository
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
        return Staff::create($data);
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
        return Staff::select(['last_name','first_name','other_name','username','email','phone','staff.user_uuid as uuid'])
            ->where('type','lvl03')
            ->join('users','users.uuid','=','staff.user_uuid')->get();

    }

    /**
     * @return mixed
     */
    public function portalAdmin()
    {
        return Staff::select(['staff.user_uuid as uuid','last_name','first_name','other_name','username','email','phone'])
            ->join('users','users.uuid','=','staff.user_uuid')
//            ->orWhere('type', 'admin 05')
//            ->orWhere('type', 'admin 03')
            ->whereIn('staff.type',['admin 05','admin 04','admin 03'])
            ->get();
    }


}
