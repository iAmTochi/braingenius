<?php

namespace App\Models\Classes;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Department extends Model
{
    use SoftDeletes, Uuid;

    protected $fillable = [
        'dept_name',
        'uuid',
        'hod',
        'created_by',
        'updated_by',
    ];



    public function classes(){

        return $this->belongsToMany(Classes::class);
    }


    /**
     * @param int $count
     * @return mixed
     */
    public function latest($count = 20)
    {
        // TODO: Implement latest() method.
    }


}
