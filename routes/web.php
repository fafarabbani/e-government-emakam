<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Front End
Route::get('/', [HomeController::class, 'homepage']);
Route::get('/form-pelaporan', [HomeController::class, 'form_pelaporan'])->middleware('auth')->name('home');
Route::post('/kirim-laporan', [HomeController::class, 'kirim_laporan'])->middleware('auth')->name('home');

// Back End
Route::get('/home', [AdminController::class, 'home'])->middleware('auth')->name('home');
Route::get('/table-pelaporan', [AdminController::class, 'table_pelaporan'])->middleware('auth')->name('table_pelaporan');
Route::get('/table-data-jenazah', [AdminController::class, 'table_data_jenazah'])->middleware('auth')->name('table_data_jenazah');
Route::get('/table-data-pelapor', [AdminController::class, 'table_data_pelapor'])->middleware('auth')->name('table_data_pelapor');
Route::get('/table-data-saksi', [AdminController::class, 'table_data_saksi'])->middleware('auth')->name('table_data_saksi');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
