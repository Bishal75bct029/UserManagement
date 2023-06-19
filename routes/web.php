<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class, 'getAllData'])->name('home');
Route::match(['get','post'],'/addData',[UserController::class,'submitData']);
Route::match(['put','get'],'/edit/{id}',[UserController::class, 'updateData'])->name('edit');
Route::delete('/delete/{id}',[UserController::class,'deleteData']);
