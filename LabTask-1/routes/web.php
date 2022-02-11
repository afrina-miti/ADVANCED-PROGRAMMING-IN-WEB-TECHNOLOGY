<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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



Route::get('/login',[PagesController::class, 'login']);
Route::get('/student',[PagesController::class, 'student']);
Route::get('/admin',[PagesController::class,'admin']);
Route::get('/homepage',[PagesController::class,'homepage']);
Route::get('/contact',[PagesController::class,'contact']);