<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    //public $timestamps = null;
    public function comment()
    {
        return $this->hasmany('App\comment');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
