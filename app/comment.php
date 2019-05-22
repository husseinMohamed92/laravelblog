<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public $timestamps = null;
    public function article()
    {
        return $this->belongsTo('App\comment');
    }

    public function User()
    {
        return $this->belongsto('App\User');
    }
}
