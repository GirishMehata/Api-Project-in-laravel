<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
    	'name' => $faker->word,
    	'detail'=>$faker->text,
    	'price'=>$faker->numberBetween(10,500),
    	'stock'=>$faker->randomDigit,
    	'discount'=>$faker->numberBetween(5,30),
        //
    ];
});
