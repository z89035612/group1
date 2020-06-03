<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'id' => $faker->id,
        'pro_no' => $faker->phoneNumber,
        'pro_name' => $faker->word,
        'album' => $faker->title,
        'artist' => $faker->name,
        'pro_price' => $faker->numberBetween(1, 50),
        'timestamp' => $faker->timestamp,
    ];
});
