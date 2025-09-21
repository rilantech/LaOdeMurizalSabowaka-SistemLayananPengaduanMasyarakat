<?php

use App\Http\Controllers\HalamanloginController;
use App\Http\Controllers\HalamanregisterController;

use App\Http\Controllers\DaftarpengunjungwisataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailriwayatpengaduanController;
use App\Http\Controllers\HalamandaftarpengaduanController;
use App\Http\Controllers\HalamandashboardController;
use App\Http\Controllers\HalamandatauserController;
use App\Http\Controllers\RiwayatpengaduanController;
use App\Http\Controllers\TempImageController;
use App\Http\Controllers\ValidasipengaduanController;
use App\Http\Controllers\HapusriwayatpengaduanController;
use App\Http\Controllers\ProfiladminController;
use App\Livewire\Wisata\WisataComponent;
use App\Livewire\Wisata\AddWisataComponent;
use App\Livewire\Wisata\EditWisataComponent;
use App\Models\Akunwisatawan;
use App\Models\Dataservis;
use Illuminate\Support\Facades\Route;
use App\Models\Kategoriwisata;
use App\Models\Riwayatpengaduan;
use Illuminate\Database\Eloquent\Builder;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/

Route::get('/', function () {
    return view('welcome');
});

//Route Web Suparman
Route::get('/login', [HalamanloginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [HalamanloginController::class, 'authenticate']);
Route::post('/logout', [HalamanloginController::class, 'logout']);

Route::get('/registrasi', [HalamanregisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [HalamanregisterController::class, 'store']);

Route::resource('beranda',HalamandashboardController::class)->middleware('auth');
Route::resource('datauser',HalamandatauserController::class)->middleware('auth');
Route::get('/tambahdatauser',[HalamandatauserController::class, 'tambahdatauser'])->middleware('auth');
Route::resource('daftarpengaduan',HalamandaftarpengaduanController::class)->middleware('auth');
Route::get('/tambahdatapengaduan',[HalamandaftarpengaduanController::class, 'tambahdatapengaduan'])->middleware('auth');
Route::get('/detailriwayatpengaduan',[RiwayatpengaduanController::class, 'detailriwayatpengaduan'])->middleware('auth');
Route::resource('validasipengaduan',ValidasipengaduanController::class);
Route::resource('hapusriwayatpengaduan',HapusriwayatpengaduanController::class)->middleware('auth');

Route::resource('detailriwayatpengaduan',DetailriwayatpengaduanController::class)->middleware('auth');
Route::resource('riwayatpengaduan',RiwayatpengaduanController::class)->middleware('auth');
Route::resource('profiladmin',ProfiladminController::class)->middleware('auth');


