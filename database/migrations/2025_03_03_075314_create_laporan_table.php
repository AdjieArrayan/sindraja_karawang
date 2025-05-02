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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('id_laporan')->unique()->autoIncrement();
            $table->string('nama_pelapor', 100);
            $table->string('regu_pelapor', 100);
            $table->string('jenis_kegiatan', 100);
            $table->date('tanggal_kegiatan');
            $table->time('waktu_kegiatan');
            $table->string('lokasi_kegiatan');
            $table->text('anggota_terlibat');
            $table->text('unsur_terlibat');
            $table->text('laporan_singkat');
            $table->text('situasi_kondisi');
            $table->string('dokumentasi_laporan')->nullable();
            $table->text('catatan_laporan')->nullable();
            $table->timestamps();
            $table->softDeletes(); // ← Tambahan untuk soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
