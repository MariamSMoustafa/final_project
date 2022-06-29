<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class traveller extends Model
{
    //
    use HasApiTokens;
    use Notifiable;

    protected $table = "travellers";
    protected $fillable = [
        'birthday','image','gender','user_id'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
