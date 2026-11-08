<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

//   agar langsung masuk ke index
Route::get('/', [KaryawanController::class, 'index']);


//  tempat routing fungsi index
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');;

//  tempat routing fungsi create
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');

//  tempat routing edit dan update
Route::get('/karyawan/{karyawan}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{karyawan}', [KaryawanController::class, 'update'])->name('karyawan.update');

// tempat routing hapus 
Route::delete('/karyawan/{karyawan}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');