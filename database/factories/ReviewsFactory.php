<?php

use App\Model\Products;
use Faker\Generator as Faker;

$factory->define(App\Model\Reviews::class, function (Faker $faker) {
    return [
        'product_id'=> function (){
            return Products::all()->random();
        },
        'customer'=>$faker->name,
        'review' => $faker->paragraph,
        'star'=>$faker->numberBetween(1,5),
    ];
});
