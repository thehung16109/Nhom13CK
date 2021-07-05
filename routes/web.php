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
/* Phượng */
//Client
Route::get('/','HomeController@index' );
Route::get('/404','HomeController@error_page');
Route::get('/trang-chu', 'HomeController@index');

//Admin login
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');

//Category
Route::get('/add-category', 'CategoryController@add_category');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('/active-category/{category_id}', 'CategoryController@unactive_category');
Route::get('/unactive-category/{category_id}', 'CategoryController@active_category');
Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route::post('/update-category/{category_id}', 'CategoryController@update_category');
Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');
// Route::get('/{category_slug}', 'CategoryController1@get_category_slug');

//Location
Route::get('/add-location', 'LocationController@add_location');
Route::get('/all-location', 'LocationController@all_location');
Route::post('/save-location', 'LocationController@save_location');
Route::get('/active-location/{location_id}', 'LocationController@unactive_location');
Route::get('/unactive-location/{location_id}', 'LocationController@active_location');
Route::get('/edit-location/{location_id}', 'LocationController@edit_location');
Route::post('/update-location/{location_id}', 'LocationController@update_location');
Route::get('/delete-location/{location_id}', 'LocationController@delete_location');

//Review
Route::get('/add-review', 'ReviewController@add_review');
Route::post('/save-review', 'ReviewController@save_review');
Route::get('/all-review', 'ReviewController@all_review');
Route::get('/active-review/{review_id}', 'ReviewController@unactive_review');
Route::get('/unactive-review/{review_id}', 'ReviewController@active_review');
Route::get('/delete-review/{review_id}', 'ReviewController@delete_review');
/* End Phượng */

