<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('index');
// Route::get('/welcome', function () {
// 	return view('welcome');
// })->middleware('verified');

Route::get('/pet-form', function () {
	return view('pet_form');
})->middleware('verified')->name('pet-form');


Route::get('/home', 'HomeController@home')->middleware('CheckAdmin')->name('home');

Route::post('/store_dog', 'HomeController@store_dog')->name('store_dog');

Route::get('/state', 'HomeController@state')->name('state');

Route::post('/state_s2', 'HomeController@state_s2')->name('state_s2');

Route::post('/city_s2', 'HomeController@city_s2')->name('city_s2');

Route::post('/pet_form_store', 'HomeController@pet_form_store')->name('pet_form_store');

Route::get('/read_dog_post', 'HomeController@read_dog_post')->name('read_dog_post');

Route::post('/approve', 'HomeController@approve')->name('approve');

Route::post('/disapprove', 'HomeController@disapprove')->name('disapprove');

Route::post('/mail', 'HomeController@mail')->name('mail');

Route::post('/', 'HomeController@filter')->name('filter');

