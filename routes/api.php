<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/workers', [WorkerController::class, 'index']);
Route::get('/workers/{id}', [WorkerController::class, 'show']);
Route::post('/workers', [WorkerController::class, 'store']);
Route::delete('/workers/{id}', [WorkerController::class, 'destroy']);
Route::put('/workers/{id}', [WorkerController::class, 'update']);