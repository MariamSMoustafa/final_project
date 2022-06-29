<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuideReview extends Model
{
    //
    protected $table = "guide-reviews";
    protected $fillable = [
        'review','rating','traveller_id','guide_id'
    ];
}
