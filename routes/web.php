<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ContactsController@apphome');

// Using this resource will make ALL the routes to the crude functionalities
// Use php artisan route:list to list all the available routes.

Route::resource('contacts','ContactsController');
