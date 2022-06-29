<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\trip;
use Faker\Generator as Faker;

$factory->define(\App\trip::class, function (Faker $faker) {
    return [
        //
        'tripname'=>$faker->country,
        'description'=>$faker->realText,
        'nofpeople'=>$faker->randomFloat(10,1,10),
        'duration'=>$faker->dateTimeBetween('now','5 days'),
        'price'=>$faker->numerify,
        'company_id'=>$faker->numerify,

    ];
});
