<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\JasaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// AuthController
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/profile', [AuthController::class, 'showProfile'])->middleware('auth:sanctum');
Route::put('/profile/update', [AuthController::class, 'updateProfile'])->middleware('auth:sanctum');
Route::delete('/profile/delete/{id}', [AuthController::class, 'deleteProfile'])->middleware('auth:sanctum');
// JasaController
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/jasa', [JasaController::class, 'indexJasa']);
    Route::get('/pemesanan', [JasaController::class, 'indexPemesanan']);
    Route::post('/pemesanan/store', [JasaController::class, 'pemesananStore']);
});
