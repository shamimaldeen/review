<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reviewer;
use App\Models\Country;
use Faker\Generator as Faker;


$factory->define(Reviewer::class, function (Faker $faker) {
    return [
       
        'fullname' => $faker->firstName.' '.$faker->lastName,
        'title' => ucfirst($faker->text(80)),
        'email' => $faker->unique()->safeEmail,
        'password' =>  Hash::make('123456'),
        'city' => $faker->city,
        'country_id' => Country::all()->random(),
        'image' 		=>  str_replace("storage/uploads/reviewer\\","",ltrim(strstr($faker->image('public/storage/uploads/reviewer',  640, 480, null, true), "/"),  "/"))
    ];
});

