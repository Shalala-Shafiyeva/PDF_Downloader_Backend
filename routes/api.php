<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index']);
});
Route::group(['prefix' => 'presentation'], function () {
    Route::get('/', [App\Http\Controllers\PresentationController::class, 'index']);
    Route::post('/store', [App\Http\Controllers\PresentationController::class, 'store']);
});
