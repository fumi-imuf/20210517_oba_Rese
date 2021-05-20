<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LikesController;
//use App\Models\Reservation;

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

Route::get('/user', [UsersController::class, 'get']);
Route::get('/reservation', [ReservationsController::class, 'index']);
Route::post('/reservation', [ReservationsController::class, 'post']);
Route::delete('/reservation', [ReservationsController::class, 'delete']);
Route::get('/shop/{shop_id}', [ShopsController::class], 'index');
Route::get('/area', [AreasController::class], 'index');
Route::get('/genre', [GenresController::class], 'index');
Route::get('/shop_name',[ShopsController::class], 'index');
Route::get('/shop', [ImagesController::class], 'index');
Route::post('/register', [RegisterController::class], 'post');
Route::post('/login', [LoginController::class], 'post');
Route::post('/logout', [LogoutController::class], 'post');
Route::post('/like', [LikesController::class], 'post');
Route::delete('/like', [LikesController::class], 'delete');




