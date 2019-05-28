<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $fillables = [
        'ammount','booking_id','client_id','created_by','status',
    ];
}
