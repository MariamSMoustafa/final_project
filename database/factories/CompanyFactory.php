<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Company::class, function (Faker $faker) {
    return [
        //
        'address'=>$faker->address,
        'logo'=>$faker->image,
        'aboutus'=>$faker->paragraph,
        'rating'=>$faker->randomElement(['1','2','3','4','5']),
        'user_id'=>$faker->numerify,
    ];
});
