<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkRequest extends Model
{
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
    public function volunteer()
    {
        return $this->hasOne('App\User','id','volunteer_id');
    }
}