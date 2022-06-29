<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Guide::class, function (Faker $faker) {
    return [
        //
        'Guide_ID'=>$faker->numerify('################'),
        'birthday'=>$faker->date,
        'gender'=>$faker->randomElement(['M', 'F']),
        'city'=>$faker->city,
        'price'=>$faker->numberBetween($min = 1500, $max = 6000),
        'image'=>$faker->randomAscii,
        'user_id'=>$faker->numerify,


    ];
});
