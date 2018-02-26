<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // making a relationship with user
    // we're saying every Post belongs to a respective user.
    public function user(){
        return $this->belongsTo('App\User');
    }
}
