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

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

//============================
//      Admin routes
//============================
Route::get('/admin', 'AdminController@index');

//----------------------------
//     Employees
//----------------------------
Route::get('/admin/employees', 'EmployeeController@all');
Route::get('/admin/employees/new', 'EmployeeController@newForm');
Route::get('/admin/employees/{emp}', 'EmployeeController@show');
Route::post('/admin/employees/new', 'EmployeeController@newEmployee');

//---------------------------
//    Products
//---------------------------
Route::get('/admin/products', 'ProductController@all');
Route::get('/admin/products/new', 'ProductController@newForm');
Route::get('/admin/products/{product}', 'ProductController@show');
Route::post('/admin/products/new', 'ProductController@newProduct');

Route::get('/about', 'HomeController@about');
Route::get('/products', 'HomeController@products');
Route::get('/shopping-cart', 'HomeController@cart');