<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
     //relationship
    // tweets belongs to user
    public function user(){
        return $this->belongsTo(User::class);
        }

       
}
