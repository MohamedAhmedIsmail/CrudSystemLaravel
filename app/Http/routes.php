<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("insert","testing@index");
Route::post("store","testing@store");
Route::get("showall",'testing@showall');
Route::get("customer/{name}",'testing@show');
Route::get("edit/{name}",'testing@edit');
Route::patch('edit/update/{id}' , "testing@update");
Route::get("delete/{id}", "testing@destroy");
