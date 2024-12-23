<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public function isPinned(){
        return !is_null($this->pinned_at);
    }

    public function topic(){
        return $this->belongsTo(Topic::class);
    } 

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function post(){
        return $this->hasOne(Post::class)->whereNull('parent_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
