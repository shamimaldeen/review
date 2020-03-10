<?php


use App\Models\Company;
use App\Models\Review;
use App\Models\Reviewer;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->text(30)),
        'review_text' => $faker->text(100),
        'rating' => rand(1, 5),
        'reviewer_id' => Reviewer::all()->random(),
        'company_id' => Company::all()->random(),
        'image'        => $faker->text(10) . $faker->randomElement(['.jpg', '.png', '.jpeg']),
        'status' => $faker->randomElement([0, 1])
    ];
});