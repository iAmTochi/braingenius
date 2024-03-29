<?php

namespace App\Models\Activity;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use  HasFactory, Uuid;

    protected $fillable = [
        'user_uuid',
        'activity',
        'ip_address',
        'platform',
        'browser',
        'is_mobile',
        'is_tablet',
        'is_desktop',
        'device_model',
        'device_family'
    ];


}
