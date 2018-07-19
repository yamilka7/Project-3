<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'Model' => str_random(7),
        'year' => rand(1885,2018),
    ];
});
