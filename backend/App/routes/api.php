<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
Route::post('login',[AuthController::class,'login']);
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::post('/users/{user}',[UserController::class,'show'])->name('users.show');
Route::post('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
