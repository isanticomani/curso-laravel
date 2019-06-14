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

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expense-reports','ExpenseReportController');
Route::get('/expense-reports/{id}/confirmDelete','ExpenseReportController@confirmDelete');
Route::get('/expense-reports/{id}/confirmSendMail','ExpenseReportController@confirmSendMail');
Route::post('/expense-reports/{id}/sendMail','ExpenseReportController@sendMail');
Route::get('/expense-reports/{expense_report}/expenses/create','ExpenseController@create');
Route::post('/expense-reports/{expense_report}/expenses','ExpenseController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
