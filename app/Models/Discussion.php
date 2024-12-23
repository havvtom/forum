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
}
