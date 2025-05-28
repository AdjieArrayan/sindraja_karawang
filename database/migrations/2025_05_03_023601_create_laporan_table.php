<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('id_laporan')->unique()->autoIncrement();
            $table->string('nama_pelapor', 100);
            $table->unsignedBigInteger('regu_id')->nullable();
            $table->unsignedBigInteger('kegiatan_id')->nullable();
            $table->date('tanggal_kegiatan');
            $table->time('waktu_kegiatan');
            $table->string('lokasi_kegiatan');
            $table->unsignedBigInteger('anggota_id')->nullable();
            $table->unsignedBigInteger('unsur_id')->nullable();
            $table->text('laporan_singkat');
            $table->unsignedBigInteger('situasi_id')->nullable();
            $table->string('dokumentasi_laporan')->nullable();
            $table->text('catatan_laporan')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('regu_id')->references('id_regu')->on('regu_laporan')->onDelete('set null');
            $table->foreign('kegiatan_id')->references('id_kegiatan')->on('jenis_kegiatan')->onDelete('set null');
            $table->foreign('anggota_id')->references('id_anggota')->on('anggota_terlibat')->onDelete('set null');
            $table->foreign('unsur_id')->references('id_unsur')->on('unsur_terlibat')->onDelete('set null');
            $table->foreign('situasi_id')->references('id_situasi')->on('situasi_kondisi')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
