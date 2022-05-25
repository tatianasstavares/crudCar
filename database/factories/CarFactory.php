<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand_id' => rand(1,6),
        'registration'=> $faker->firstName(),
        'year_of_manufacture' => $faker->year(),
        'color'=>$faker->colorName,
        'deleted_at'=> new DateTime()
    ];
});


// -registration
// -year_of_manufacture
// -color
// -created_at
// -updated_at
// -deleted_at
