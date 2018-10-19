<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Products::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'stock' => $faker->randomDigitNotNull,
        'discount' => $faker-> numberBetween(2,20),
    ];
});
