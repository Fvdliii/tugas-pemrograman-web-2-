<?php

use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PendudukController::class, 'index']);

Route::get('/Penduduk', [PendudukController::class, 'index'])->name('Penduduk.index');
Route::get('/Penduduk/create', [PendudukController::class, 'create'])->name('Penduduk.create');
Route::post('/Penduduk/store', [PendudukController::class, 'store'])->name('Penduduk.store');
Route::get('/Penduduk/{penduduk}/edit', [PendudukController::class, 'edit'])->name('Penduduk.edit');
Route::put('/Penduduk/{penduduk}', [PendudukController::class, 'update'])->name('Penduduk.update');
