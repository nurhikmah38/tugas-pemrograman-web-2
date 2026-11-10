<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'MAHASISWA']);
});


Route::get('/dashboard/create', function () {
    return view('dashboard.create', ['title' => 'Tambah Data Mahasiswa']);
});
