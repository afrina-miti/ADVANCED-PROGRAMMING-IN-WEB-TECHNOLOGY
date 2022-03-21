<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/department/list',[PagesAPIController::class,'deptlist']);
Route::get('/course/list',[PagesAPIController::class,'courselist']);
Route::get('/department/add',[PagesAPIController::class,'adddept']);
Route::get('/course/add',[PagesAPIController::class,'courseadd']);
Route::post('/department/update',[PagesAPIController::class,'deptupdate']);
Route::post('/course/update',[PagesAPIController::class,'courseupdate']);
Route::post('/department/delete',[PagesAPIController::class,'deptdelete']);
Route::get('/course/delete',[PagesAPIController::class,'coursedelete']);