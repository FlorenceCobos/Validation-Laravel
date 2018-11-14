<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function cities()
    {
      return $this->belongsToMany('App\City');
    }
    public function statuses()
    {
      return $this->belongsToMany('App\Status');
    }
}
