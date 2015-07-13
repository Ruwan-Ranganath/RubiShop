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

Route::get('login', 'adminController@login');
Route::get('dashboard', 'adminController@dashboard');
Route::get('add-product', 'adminController@add_Product');
Route::get('add-category', 'adminController@add_Category');
Route::get('add-slider', 'adminController@add_slider');
Route::get('cart-settings', 'adminController@cart_Settings');
Route::get('view-products', 'adminController@view_product');
Route::get('view-orders', 'adminController@view_orders');
Route::get('view-customers', 'adminController@cart_customers');
