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
//pages
Route::get('/', 'pagescontroller@index');
Route::get('/about', 'pagescontroller@about');
Route::get('/services', 'pagescontroller@services');



//routes to the post model
Route::resource('posts', 'PostsController');

//routes to order model
Route::resource('orders', 'OrdersController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/orders', 'DashboardordersController@index');

