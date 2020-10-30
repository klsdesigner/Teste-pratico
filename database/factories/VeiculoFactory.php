<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'placa' => rand('[A-Z]{3}-[0-9]{4}'),
        'renevam' => rand(9),
        'modelo' => str_random(10),
        'marca' => str_random(10),
        'ano' => $faker->date(),        
    ];
});
