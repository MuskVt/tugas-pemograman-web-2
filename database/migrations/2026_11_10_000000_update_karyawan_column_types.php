<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //up() dijalankan saat menjalankan php artisan migrate—di file baru ini, kolom kelamin, jabatan, dan tglgabung diubah.
        Schema::table('karyawans', function (Blueprint $table) {
            $table->string('kelamin', 20)->change();
            $table->string('jabatan', 50)->change();
            $table->date('tglgabung')->change();
        });
    }

    public function down(): void
    {
        //down() dijalankan saat migrasi dibatalkan dengan rollback—mengembalikan tipe kolom seperti semula.
        Schema::table('karyawans', function (Blueprint $table) {
            $table->string('kelamin', 1)->change();
            $table->string('jabatan', 1)->change();
            $table->integer('tglgabung')->change();
        });
    }
};
