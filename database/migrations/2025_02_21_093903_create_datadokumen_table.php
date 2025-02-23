<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datadokumen', function (Blueprint $table) {
            $table->increments('idDokumen'); // Menggunakan increments agar dapat dikelola secara manual
            $table->string('kodeDokumen');
            $table->string('nomorDokumen');
            $table->string('tanggalDokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datadokumen');
    }
};
