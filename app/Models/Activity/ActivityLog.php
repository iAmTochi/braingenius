<?php

namespace App\Models\Activity;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use SoftDeletes, HasFactory, Uuid;

    protected $fillable = [
        'user_uuid',
        'activity',
        'ip_address',
        'platform',
        'browser',
    ];

    public function create_activity($activity,$user_uuid, $ip_address, $platform, $browser){
        $this->create([

        ]);
    }
}
