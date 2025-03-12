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
        Schema::create('data_entitas_pemilik_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nomorIdentitas');
            $table->string('namaEntitas');
            $table->string('alamatEntitas');
            $table->string('kodeEntitas');
            $table->string('kodeJenisApi');
            $table->string('kodeJenisIdentitas');
            $table->string('kodeStatus');
            $table->string('niperEntitas');
            $table->string('seriEntitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_entitas_pemilik_barang');
    }
};
