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
        Schema::create('data_header', function (Blueprint $table) {
            $table->id();
            $table->integer('nomorAju');
            $table->string('kodeKantor');
            $table->string('kodeJenisTpb');
            $table->string('kodeTujuanPengiriman');
            $table->string('kodeCaraBayar');
            $table->dropTimestamps(); // This will remove the columns if the migration is roll
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_header');

    }
};
