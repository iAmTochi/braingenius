<?php


namespace App\Traits;


use App\Models\Sessions\Session;

trait ActiveSession
{
    private function currentSession(){
        return Session::where('status', true)->first('uuid');
    }

}
