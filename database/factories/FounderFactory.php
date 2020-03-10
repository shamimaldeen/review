<?php


use App\Models\Founder;
use Faker\Generator as Faker;

$factory->define(Founder::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName.' '.$faker->lastName,
        'designation' => ucfirst($faker->text(80)),

        'image' => $faker->text(10).$faker->randomElement(['.jpg','.PNG','.jpeg','.gif']),
    ];
});
