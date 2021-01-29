<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mark; 
use Faker\Generator as Faker;

$factory->define(Mark::class, function (Faker $faker) {
    return [
        
        'name'               => $faker -> company(),
        'logo_url'           =>           'https://www.riviera24.it/photogallery_new/images/2016/08/foto-gattini-314424.jpg',
        'structures_number'  =>           rand(5, 30)       
        //sostituzione imageUrl() di faker perché non funzionante
    ]; 
});
