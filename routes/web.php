<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//for form 
Route::get('csv','csvcontroller@csvview');
Route::post('csv','csvcontroller@csvdata');

//for the view of result
Route::get('csvview','csvcontroller@dataview');
