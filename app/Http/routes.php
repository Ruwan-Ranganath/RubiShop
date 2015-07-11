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
Route::get('/', 'FrontendController@home');
Route::get('about', 'FrontendController@about');
Route::get('contact', 'FrontendController@contact');


/* Back End Admin Side */

Route::get('backoffice/add-product', 'BackendController@AddProduct');
Route::get('backoffice/add-category', 'BackendController@NewCategory');
Route::get('backoffice/slider-manage', 'BackendController@ChangeSlider');

