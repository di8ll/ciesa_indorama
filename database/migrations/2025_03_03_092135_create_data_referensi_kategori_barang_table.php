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
        Schema::create('data_referensi_kategori_barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_dokumen');
            $table->string('kode_kategori_barang');
            $table->string('nama_kategori_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_referensi_kategori_barang');
    }
};
