<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
    'date','start_time','end_time','photo','price','type_id','note','client_id','photographer_id','created_by','status',
    ];


    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function client(){
        return $this->belongsTo('App\User' ,'client_id');
    }
    public function photographer(){
        return $this->belongsTo('App\User' ,'photographer_id');
    }
    public function create(){
        return $this->belongsTo('App\User' ,'created_by');
    }
}
