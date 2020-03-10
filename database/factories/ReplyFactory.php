<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use App\Models\Reviewer;
use App\Models\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'reply_text' => ucfirst($faker->text(50)),
        'review_id' => Reviewer::all()->random(),
        'company_id' => Company::all()->random()
    ];
});
