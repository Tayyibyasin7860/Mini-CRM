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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/create', 'CompanyController@create')->name('companies.create');
Route::post('/companies', 'CompanyController@store')->name('companies.store');

Route::get('/employees', 'EmployeeController@index')->name('employees.index');
Route::get('/employees/create', 'EmployeeController@create')->name('employees.create');
Route::post('/employees', 'EmployeeController@store')->name('employees.store');
Route::get('/employees/{employee}/edit', 'EmployeeController@edit')->name('employees.edit');
Route::patch('/employees/{employee}', 'EmployeeController@update')->name('employees.update');
Route::delete('/employees/{employee}', 'EmployeeController@destroy')->name('employees.destroy');
