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

Route::get('/','HomeController@index');

  Route::get('/lang/{lang}', 'AdminController@setlang');
  Route::group(['middleware'=>['admin']],function(){
  Route::get('/admin', 'AdminController@admin');
  Route::resource('/department', 'DepartmentController');
  Route::resource('/employee', 'EmployeeController');
  Route::resource('/user', 'UserController');
  Route::post('/calcSalries', 'AdminController@calcSalries');

});


Auth::routes();

Route::get('/', 'HomeController@index');
