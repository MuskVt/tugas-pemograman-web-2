<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;


Route::get('/', [KaryawanController::class, 'index']);


Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');;
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');

Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');

Route::get('/karyawan/{karyawan}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');

Route::put('/karyawan/{karyawan}', [KaryawanController::class, 'update'])->name('karyawan.update');