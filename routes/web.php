<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\StudentsController;

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
    return view('insert');
});

Route::post('store',[StudentsController::class,'store']);
Route::get('show',[StudentsController::class,'show']);
Route::get('edit/{id}',[StudentsController::class,'edit']);
Route::post('update/{id}',[StudentsController::class,'update']);
Route::get('delete/{id}',[StudentsController::class,'destroy']);