<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('Produto ###'),
        'category_id' => rand(1,10)
    ];
});
