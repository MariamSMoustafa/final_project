<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Model
{
    //
    use HasApiTokens;
    use Notifiable;

    protected $table = "companies";
    protected $fillable = [
     'address','aboutus','logo','rating','user_id'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
