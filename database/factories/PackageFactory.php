<?php


use App\Models\Package;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['standard', 'extended','premium']),
        'duration' => $faker->randomElement([1,3,4,6,7]),
        'description' => $faker->text(50),
        'price' => rand(200,300),
        'duration_unit' => $faker->randomElement(['month','months','year','years'])
    ];
});
