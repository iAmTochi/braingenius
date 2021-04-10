<?php

namespace App\Models\Classes;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassArmStaff extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [];
}
