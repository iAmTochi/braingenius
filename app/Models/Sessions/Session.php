<?php

namespace App\Models\Sessions;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use Uuid;
    //


    public function current_session()
    {
        return $this->where('status',1)->first();
    }

    public function sessions_list(){
        return $this->orderBy('id', 'DESC')->get();
    }


    public function auto_next_session_info(array $current_session)
    {
        // TODO: Implement auto_next_session_info() method.
    }
}
