<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/karyawan', function () {
    return view('karyawan.index', ['title' => 'Karyawan']);
});

Route::get('/karyawan/create', function () {
return view('karyawan.create', ['title' => 'Create Karyawan']);
});