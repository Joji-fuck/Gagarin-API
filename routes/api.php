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


Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
});

Route::post('/spacecraft',[ \App\Http\Controllers\Api\SpacecraftController::class, 'create']);
Route::patch('/spacecraft/{id}',[ \App\Http\Controllers\Api\SpacecraftController::class, 'update']);
Route::delete('/spacecraft/{id}',[ \App\Http\Controllers\Api\SpacecraftController::class, 'destroy']);
Route::get('/spacecraft/{id}',[ \App\Http\Controllers\Api\SpacecraftController::class, 'show']);
