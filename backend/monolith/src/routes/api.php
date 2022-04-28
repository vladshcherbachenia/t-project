<?php

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

Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth:api');

Route::apiResource('users', \App\Http\Controllers\UserController::class)->middleware('auth:api');
Route::apiResource('roles', \App\Http\Controllers\RoleController::class)->middleware('auth:api');
Route::apiResource('products',\App\Http\Controllers\ProductController::class)->middleware('auth:api');
Route::apiResource('orders',\App\Http\Controllers\OrderController::class)->middleware('auth:api')
    ->only('index', 'show');
Route::apiResource('permissions',\App\Http\Controllers\PermissionController::class)->middleware('auth:api')
    ->only('index');

Route::get('user', [\App\Http\Controllers\UserController::class, 'user'])->middleware('auth:api');
Route::put('users/info', [\App\Http\Controllers\UserController::class, 'updateInfo'])->middleware('auth:api');
Route::put('users/password', [\App\Http\Controllers\UserController::class, 'updatePassword'])->middleware('auth:api');
Route::post('upload', [\App\Http\Controllers\ImageController::class, 'upload'])->middleware('auth:api');
Route::get('export', [\App\Http\Controllers\OrderController::class, 'export'])->middleware('auth:api');
Route::get('chart', [\App\Http\Controllers\DashboardController::class, 'chart'])->middleware('auth:api');
