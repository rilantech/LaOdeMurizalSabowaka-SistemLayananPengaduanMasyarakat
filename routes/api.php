<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\Api\DatauserController;
use App\Http\Controllers\Api\ApidaftarpengaduanController;
use App\Http\Controllers\AkunuserController;
use App\Http\Controllers\Api\ApiriwayatpengaduanController;
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


// API APLIKASI SUPARMAN
Route::apiResource('datapengaduan', ApidaftarpengaduanController::class);
Route::apiResource('riwayatpengaduan', ApiriwayatpengaduanController::class);
Route::post('register',[AkunuserController::class, 'register']);
Route::post('login',[AkunuserController::class, 'login']);
Route::get('/datauser/{username}', [DatauserController::class, 'index']);

