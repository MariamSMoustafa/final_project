<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(\App\User::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'email' => $faker->email,
        'password'=>$faker->password,
        'phone'=>$faker->phoneNumber,
        'type'=>$faker->randomElement(['T','G','C'])

    ];
});
