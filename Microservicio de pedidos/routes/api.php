<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::middleware(['OrderMiddleware'])->group(function () {
    Route::get('/orders', [OrderController::class,'index']);
    Route::post('/orders', [OrderController::class,'store']);
    Route::delete('/orders/{id}', [OrderController::class,'destroy']);
    Route::put('/orders/{id}', [OrderController::class,'update']);

});
