<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/login','Auth\LoginController@login');
Route::get('/auth/register','Auth\RegisterController@regidter');
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
	
	Route::get('/admin/dashboard','Admin\DashBoardController@index');	
	Route::get('/admin/user/','admin\user\UserController@index')->name('admin.user');
Route::post('/admin/user/{id}/edit','admin\user\UserController@edit');
Route::patch('/admin/user/{id}','admin\user\UserController@update');
Route::delete('/admin/user/{id}','admin\user\UserController@destroy');

Route::get('/admin/product/','admin\product\ProductController@index')->name('admin.product');
Route::get('/admin/product/create','admin\product\ProductController@create')->name('admin.product.create');
Route::post('/admin/product/','admin\product\ProductController@store');
Route::post('/admin/product/{id}/edit','admin\product\ProductController@edit');
Route::patch('/admin/product/{id}','admin\product\ProductController@update');
Route::delete('/admin/product/{id}','admin\product\ProductController@destroy');


Route::get('/admin/category/','admin\category\CategoryController@index')->name('admin.category');
Route::get('/admin/category/create','admin\category\CategoryController@create')->name('admin.category.create');
Route::post('/admin/category/','admin\category\CategoryController@store');
Route::post('/admin/category/{id}/edit','admin\category\CategoryController@edit');
Route::patch('/admin/category/{id}','admin\category\CategoryController@update');
Route::delete('/admin/category/{id}','admin\category\CategoryController@destroy');
});
Route::group(['middleware' => 'App\Http\Middleware\UserMiddleware'], function()
{
	Route::get('/user/{id}/show',"HomeController@show");
	Route::get('/cart','user\cart\CartController@index')->name('user.cart');
	Route::get('/cart/{id}','user\cart\CartController@store');
	Route::post('/cart/{id}','user\cart\CartController@update');
	Route::delete('/cart/{id}','user\cart\CartController@destroy');

	Route::get('/older','user\older\OlderController@index')->name('user.older');
	
});

Route::get('/auth/logout','Auth\LogoutController@logout');





Route::get('/home', 'HomeController@index')->name('home');