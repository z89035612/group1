<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'id' => $faker->id,
        'user_id' => $faker->username,
        'pro_no' => $faker->randomNumber,
        'pro_price' => $faker->numberBetween(1, 50),
        'total_price' => $faker->numberBetween(1, 1000),
        'timestamp' => $faker->timestamp,
    ];
});
