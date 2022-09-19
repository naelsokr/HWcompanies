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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/companies', [App\Http\Controllers\CompaniesController::class, 'index'])->name('companies');
Route::get('/add-company', [App\Http\Controllers\CompaniesController::class, 'addCompany'])->name('add-company');
Route::post('add-company','CompaniesController@insert');
Route::get('delete-company/{id}',[App\Http\Controllers\CompaniesController::class, 'destroy']);


Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees');
Route::get('/add-Employee', [App\Http\Controllers\EmployeeController::class, 'addEmp'])->name('add-employee');
Route::post('addEmployee','EmployeeController@insert');
Route::get('delete-employee/{id}',[App\Http\Controllers\EmployeeController::class, 'destroy']);