<?php


namespace App\Traits;


trait UserUuidRouteKeyName
{


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'user_uuid';
    }

}
