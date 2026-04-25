<?php

use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Penduduk', [PendudukController::class, 'index']);
Route::get('//Penduduk/create', [PendudukController::class, 'create']);