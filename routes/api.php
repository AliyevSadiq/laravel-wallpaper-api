<?php

use App\Http\Controllers\WallPaperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[WallPaperController::class,'index']);
Route::get('/image/{id}',[WallPaperController::class,'select']);
Route::get('/category',[WallPaperController::class,'category']);
Route::get('/category/{id}',[WallPaperController::class,'selectByCategoryId']);



