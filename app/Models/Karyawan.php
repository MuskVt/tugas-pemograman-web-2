<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// agar data yang di masukkan bisa di isi
#[Fillable(['name', 'nik', 'kelamin', 'jabatan', 'tglgabung'])]
class Karyawan extends Model
{
    /** @use HasFactory<\Database\Factories\KaryawanFactory> */
    use HasFactory;
}
