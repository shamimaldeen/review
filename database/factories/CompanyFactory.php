<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
     return [
        'company_name' => $faker->company,
        'category_id' => Category::all()->random(),
        'package_id' => Package::all()->random(),
        'description' => $faker->text(50),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'website' => 'www.'.$faker->domainName,
        'password' =>  Hash::make('123456'),
        'phone' => $faker->phoneNumber,
        'image'         =>  str_replace("storage/uploads/company\\","",ltrim(strstr($faker->image('public/storage/uploads/company',  640, 480, null, true), "/"),  "/")),
        'address' => $faker->address,
        'status' => $faker->randomElement([0,1])
    ];
});

