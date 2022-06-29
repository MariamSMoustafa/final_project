<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookguide extends Model
{
    //
    protected $table = "bookguides";
    protected $fillable = [
        'national_id','phone_num1','phone_num2','from','to','num_of_days','message','travellers_id','guide_id'
    ];
}
