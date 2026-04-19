<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Penduduk', function () {
    return view('penduduk.index', ['title' => 'penduduk']);
});

Route::get('/Penduduk/create', function () {
    return view('penduduk.create', ['title' => 'Create student']);
});
