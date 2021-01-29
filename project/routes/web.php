<?php

use Illuminate\Support\Facades\Route;
//home
Route::get('/', 'BrandController@index')
    -> name('brand-index');

//marks
Route::get('/homeBrands', 'BrandController@index')
    -> name('brand-index');

Route::get('/brandProfile/{id}', 'BrandController@show') 
    -> name('brand-show');

//workers
Route::get('/homeWorkers', 'WorkerController@index')
    -> name('worker-index');

Route::get('/workerProfile/{id}', 'WorkerController@show')
    -> name('worker-profile'); 

//structures
Route::get('/homeStructures', 'StructureController@index')
    -> name('structure-index');

Route::get('/structureProfile/{id}', 'StructureController@show')
    -> name('structure-profile');

