<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TestController;
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



Route::get('/customers', [CustomerController::class,'index']);
Route::get('/customers/create', [CustomerController::class,'create']);
Route::get('/customers/{id}/edit', [CustomerController::class,'edit']);
Route::post('/customers', [CustomerController::class,'store']);
Route::get('/home', 'TestController@index')->middleware('age');
Route::get('/upload', 'TestController@uploadForm');
Route::post('/upload', 'TestController@uploadFile')->name('upload.uploadFile');