<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Product::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        'name' => $faker->word,
        'sku' => $faker->isbn13,
        'product_details' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'product_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'stock' => $faker->randomDigitNotNull,
        'price' => $faker->numberBetween($min = 1000, $max = 20000),
        'present_price' => $faker->numberBetween($min = 500, $max = 8000),
        'created_at' => $now,
        'updated_at' => $now
    ];
});
