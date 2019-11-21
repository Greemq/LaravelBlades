<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment','post_id')->orderByDesc('created_at');
    }
    public function userName(){
        return $this->belongsTo('App\User','author');
    }
}
