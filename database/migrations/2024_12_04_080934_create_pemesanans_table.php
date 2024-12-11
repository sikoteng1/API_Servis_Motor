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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_jasa');
            $table->foreignId('id_user')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggal_pemesanan');
            $table->string('nama_pemesan');
            $table->integer('telefon_pemesan');
            $table->string('alamat_pemesan');
            $table->integer('biaya_jasa');
            $table->integer('biaya_tambahan');
            $table->integer('total_biaya');
            $table->string('keterangan');
            $table->date('tanggal_datang');
            $table->string('status_pemesanan');
            $table->foreignId('id_oli')->constrained('olis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_servis')->constrained('servis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_cek')->constrained('ceks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_sparepart')->constrained('spareparts')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
