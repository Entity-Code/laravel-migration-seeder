<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Structure;
use Faker\Generator as Faker;

$factory->define(Structure::class, function (Faker $faker) {
    return [
        'name'              => $faker -> firstName(),
        'address'           => $faker -> address(),
        'workers_number'    =>           rand(1,1000)
    ];
}); 
