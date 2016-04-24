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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
<<<<<<< HEAD

Route::get('/admin', 'AdminController@index');
Route::get('/admin/employees', 'EmployeeController@all');
Route::get('/admin/employees/new', 'EmployeeController@newForm');
Route::get('/admin/employees/{emp}', 'EmployeeController@show');
=======
Route::get('/about', 'HomeController@about');
Route::get('/products', 'HomeController@products');
>>>>>>> e1516f59fa1e4d2b8a2d7e9d103b848db286928d
