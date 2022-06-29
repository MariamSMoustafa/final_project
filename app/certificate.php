<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    //
    protected $table = "certificates";
    protected $fillable = [
        'certificate_img','guide_id'
    ];
}
