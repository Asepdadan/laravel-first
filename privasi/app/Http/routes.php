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
    return View::make('belajar');
});

Route::get('test', function(){

	return "routet latihan";

});

Route::get('blade', 'artisan_controller@create');

Route::get('cekblade', 'artisan_controller@index');

Route::get('testurl','artisan_controller@index');


Route::get('createpost','artisan_controller@create');


