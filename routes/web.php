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

Route::get('/', 'HomeController@getHome')->name('home');
Route::get('/about-us', 'HomeController@getAboutUs')->name('about-us');
Route::get('/services', 'HomeController@getServices')->name('services');
Route::get('/training/{training}', 'HomeController@getTraining')->name('training');
Route::get('/gallery', 'HomeController@getGallery')->name('gallery');
Route::get('/contactus', 'HomeController@getContactUs')->name('contactus');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
