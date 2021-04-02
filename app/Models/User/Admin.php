<?php

namespace App\Models\User;

use App\Traits\DeleteFile;
use App\Traits\UserUuidRouteKeyName;
use App\Traits\Uuid;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Admin extends Model
{
    use SoftDeletes,
        UserUuidRouteKeyName,
        DeleteFile;

    protected $fillable = [
        'user_uuid',
        'title',
        'last_name',
        'first_name',
        'other_name',
        'phone',
        'address',
        'dob',
        'gender',
        'image',
        'created_by',
        'updated_by',
    ];




    public function user(){
        return $this->belongsTo(User::class,'user_uuid','uuid');
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
    public function admins()
    {
        return $this->select(['admins.user_uuid as uuid','last_name','first_name','other_name','username','email','phone','types.name as type'])
            ->whereIn('type',['lvl04','lvl05'])
            ->join('users','users.uuid','=','admins.user_uuid')
            ->join('types','types.code','=','users.type')
            ->get();
    }

}
