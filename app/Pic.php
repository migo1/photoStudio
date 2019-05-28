<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    protected $fillables = [
        'picture','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
