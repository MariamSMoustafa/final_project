<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    protected $table = "bookings";
    protected $fillable = [
        'national_id','phone_num1','phone_num2','num_of_seats','trip_id','traveller_id'
    ];
}
