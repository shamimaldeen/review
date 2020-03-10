<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use App\Models\ReviewImage;
use Faker\Generator as Faker;

$factory->define(ReviewImage::class, function (Faker $faker) {
    return [
        'review_image' 		=>  str_replace("storage/uploads/review\\","",ltrim(strstr($faker->image('public/storage/uploads/review',  640, 480, null, true), "/"),  "/")),
        'review_id' => Review::all()->random(),
    ];
});
