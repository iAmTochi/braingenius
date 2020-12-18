<?php

namespace App\Models\Classes;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Arm extends Model
{
    use SoftDeletes,Uuid;

    protected $fillable = [
        'arm',
        'created_by',
        'updated_by',
    ];


    public function classes(){

        return $this->belongsToMany(Classes::class);
    }
}
