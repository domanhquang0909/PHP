<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/users',[UserController::class, 'index']);

Route::get('/register',[RegisterController::class, 'get_register']);
Route::post('/register',[RegisterController::class, 'post_register']);
Route::get('/list',[RegisterController::class,'list']);