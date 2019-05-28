<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillables = [
        'type'
    ];
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }

  //  public function user(){
    //    return $this->hasOne('App\User');
    //}

    public function client(){
      return $this->belongsToMany('App\User' ,'id','client_id');
    }
   public function photographer(){
      return $this->belongsToMany('App\User' ,'id','photographer_id');
    }
   public function create(){
        return $this->belongsToMany('App\User' ,'id','created_by');
    }
}