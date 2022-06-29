<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyReview extends Model
{
    //
    protected $table = "company-reviews";
    protected $fillable = [
        'review','rating','traveller_id','company_id'
    ];
}
