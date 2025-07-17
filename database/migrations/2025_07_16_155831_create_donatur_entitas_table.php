<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('donatur_entitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donatur_id')->constrained('donatur')->onDelete('cascade');
            $table->string('nama_entitas');
            $table->string('nama_pj');
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('program')->nullable();
            $table->enum('status_progres', ['open', 'closing', 'cancel', 'tutup', 'ditarik', 'kotak hilang', 'donasi'])->nullable();
            $table->text('detail_status')->nullable();
            $table->string('lokasi_gps')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donatur_entitas');
    }
};
