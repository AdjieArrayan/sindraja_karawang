<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('regu_laporan', function (Blueprint $table) {
            $table->id('id_regu'); // primary key yg akan direferensikan oleh laporan.regu_id
            $table->string('nama_regu'); // contoh kolom tambahan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('regu_laporan');
    }
};
