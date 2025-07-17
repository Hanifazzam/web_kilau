<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donatur_id')->constrained('donatur')->onDelete('cascade');
            $table->foreignId('karyawan_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('tanggal_kunjungan');
            $table->decimal('total_donasi', 12, 2)->nullable();
            $table->enum('status_kunjungan', ['donasi', 'tidak donasi', 'tutup', 'kotak hilang', 'ditarik']);
            $table->text('keterangan_tutup')->nullable();
            $table->string('lokasi_gps')->nullable();
            $table->string('foto_bukti')->nullable(); // path file foto
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
