<?php


namespace App\Traits\ActivityLog;


use App\Models\Activity\ActivityLog;
use Browser;

trait ActivityLogTrait
{
    private function create_activity($activity){
        ActivityLog::create([
            'user_uuid' => auth()->user()->uuid,
            'activity'  => $activity,
            'ip_address'=> $_SERVER['REMOTE_ADDR'],
            'platform'  => Browser::platformName(),
            'browser'   => Browser::browserName(),
            'is_mobile' => Browser::isMobile(),
            'is_tablet' => Browser::isTablet(),
            'is_desktop'=> Browser::isDesktop(),
            'device_model'   => Browser::deviceModel(),
            'device_family'   => Browser::deviceFamily(),
        ]);
    }
}
