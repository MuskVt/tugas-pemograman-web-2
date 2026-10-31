<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;


Route::get('/', [KaryawanController::class, 'index']);


Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
