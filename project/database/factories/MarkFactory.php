<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mark; 
use Faker\Generator as Faker;

$factory->define(Mark::class, function (Faker $faker) {
    return [
        
        'name'           => $faker -> company(),
        'logo_url'       => $faker -> imageUrl(),   
        'structures_number'  =>       rand(5, 30)       

    ]; 
});
