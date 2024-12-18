<?php

use App\Http\Controllers\ReportesController;
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

Route::middleware(['ReportMiddleware'])->group(function () {
    Route::get('/reports1',[ReportesController::class, 'nameandCategory']);
    Route::get('/reports2',[ReportesController::class, 'orderByPrice']);
    Route::get('/reports3',[ReportesController::class, 'stock_0']);
    Route::get('/reports4',[ReportesController::class, 'stock-10']);
});