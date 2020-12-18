<?php

namespace App\Models\Classes;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Subject extends Model
{
    use SoftDeletes, Uuid;

    protected $fillable = [
        'full_name',
        'short_name',
        'uuid',
        'dept_uuid',
        'created_by',
        'updated_by',
    ];




    public function classes(){

        return $this->belongsToMany(Classes::class);
    }
}
