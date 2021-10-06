<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
    //
     // Mention belongs to user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
