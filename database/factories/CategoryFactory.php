<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->randomElement([
            'Fashion', 'Internet Service Provider', 'Newspaper', 'Travel Agency', 'E-Commerce', 'Low Farm', 'Home Decor', 'Electronics', 'Health Agency', 'Hospital', 'Payment Gateway', 'Software Industry', 'Personal Care'

        ]),
        'image'         =>  str_replace("storage/uploads/category\\", "", ltrim(strstr($faker->image('public/storage/uploads/category',  640, 480, null, true), "/"),  "/"))
    ];
});
