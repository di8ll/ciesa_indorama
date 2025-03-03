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
        Schema::create('data_referensi_hs_code', function (Blueprint $table) {
            $table->id();
            $table->string('hs_code');
            $table->string('uraian_barang_indonesia');
            $table->string('uraian_barang_inggris');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_referensi_hs_code');
    }
};
