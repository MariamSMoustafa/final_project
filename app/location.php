<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    //
    protected $table = "locations";
    protected $fillable = [
        'title','description','image','city_id'
    ];
}
