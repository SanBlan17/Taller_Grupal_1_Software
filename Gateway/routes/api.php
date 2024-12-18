<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\OrderController;
use app\Http\Controllers\ProductController;
use app\Http\Controllers\ReportesController;
use app\Http\Controllers\CategoryController;

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


Route::get('/orders', [OrderController::class,'index']);
Route::post('/orders', [OrderController::class,'store']);
Route::delete('/orders/{id}', [OrderController::class,'destroy']);
Route::put('/orders/{id}', [OrderController::class,'update']);

Route::get('/product', [ProductController::class,'index']);
Route::post('/product', [ProductController::class,'store']);
Route::delete('/product/{id}', [ProductController::class,'destroy']);
Route::put('/product/{id}', [ProductController::class,'update']);

Route::get('/category', [CategoryController::class,'index']);
Route::post('/category', [CategoryController::class,'store']);
Route::delete('/category/{id}', [CategoryController::class,'destroy']);
Route::put('/category/{id}', [CategoryController::class,'update']);

Route::get('/reports', [ReportesController::class,'nameandCategory']);
Route::get('/reports', [ReportesController::class,'orderByPrice']);
Route::get('/reports', [ReportesController::class,'stock_0']);
Route::get('/reports', [ReportesController::class,'stock_10']);