<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function userName(){
        return $this->belongsTo('App\User','author');
    }

}
