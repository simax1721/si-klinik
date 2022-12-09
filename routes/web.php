<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PiketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkkerjaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index',]);
    Route::get('/pegawai/create', [PegawaiController::class, 'create',]);
    Route::post('/pegawai/store', [PegawaiController::class, 'store',]);
    Route::get('/pegawai/{id}/destroy', [PegawaiController::class, 'destroy',]);
    Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit',]);
    Route::put('/pegawai/{id}/update', [PegawaiController::class, 'update',]);
    
    // kehadiran
    Route::get('/kehadiran', [AbsenController::class, 'index',]);
    Route::post('/absenpegawai/{id}/submit', [DashboardController::class, 'submitAbsen',]);
    
    // kehadiran
    Route::get('/piket', [PiketController::class, 'index',]);
    Route::get('/piket/create', [PiketController::class, 'create',]);
    Route::post('/piket/store', [PiketController::class, 'store',]);
    Route::get('/piket/indexedit', [PiketController::class, 'indexedit',]);
    Route::get('/piket/{id}/destroy', [PiketController::class, 'destroy',]);
    
    // kehadiran
    Route::get('/sk-kerja', [SkkerjaController::class, 'index',]);
    Route::get('/sk-kerja/create', [SkkerjaController::class, 'create',]);
    Route::post('/sk-kerja/store', [SkkerjaController::class, 'store',]);
    Route::get('/sk-kerja/{id}/edit', [SkkerjaController::class, 'edit',]);
    Route::put('/sk-kerja/{id}/update', [SkkerjaController::class, 'update',]);
    Route::get('/sk-kerja/{id}/destroy', [SkkerjaController::class, 'destroy',]);
});


require __DIR__.'/auth.php';
