<?php


use App\Models\BlogCategory;
use Faker\Generator as Faker;

$factory->define(BlogCategory::class, function (Faker $faker) {
    return [
        'name'     => ucfirst($faker->unique()->text(15)),
    ];
});