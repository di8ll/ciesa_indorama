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
        Schema::create('tpb_bc25', function (Blueprint $table) {
            $table->id();
            $table->string('asalData');
            $table->decimal('bruto');
            $table->decimal('cif');
            $table->decimal('dasarPengenaanPajak');
            $table->string('disclaimer');
            $table->string('kodeJenisTpb');
            $table->decimal('hargaPenyerahan');
            $table->string('idPengguna');
            $table->string('jabatanTtd');
            $table->integer('jumlahKontainer');
            $table->string('kodeCaraBayar');
            $table->string('kodeDokumen');
            $table->string('kodeKantor');
            $table->string('kodeLokasiBayar');
            $table->string('kodeTujuanPengiriman');
            $table->string('kodeValuta');
            $table->string('kotaTtd');
            $table->string('namaTtd');
            $table->decimal('ndpbm');
            $table->decimal('netto');
            $table->string('nomorAju');
            $table->decimal('seri');
            $table->date('tanggalAju');
            $table->date('tanggalTtd');
            $table->decimal('volume');
            $table->decimal('ppnPajak');
            $table->decimal('ppnbmPajak');
            $table->decimal('tarifPpnPajak');
            $table->decimal('tarifPpnbmPajak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpb_bc25');
    }
};
