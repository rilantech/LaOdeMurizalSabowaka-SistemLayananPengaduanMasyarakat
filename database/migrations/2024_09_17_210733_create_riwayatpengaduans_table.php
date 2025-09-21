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
        Schema::create('riwayatpengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('id_pesan', 500);
            $table->string('tanggal_kirim', 500);
            $table->string('gambar', 500);
            $table->string('nama_pengadu', 500);
            $table->string('lokasi', 500);
            $table->string('nomor_hp_pelapor', 500);
            $table->string('jenis_pengaduan', 500);
            $table->string('isi_pengaduan', 500);
            $table->string('status_proses', 500);
            $table->string('komentar', 500);
            $table->string('tanggal_validasi', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayatpengaduans');
    }
};
