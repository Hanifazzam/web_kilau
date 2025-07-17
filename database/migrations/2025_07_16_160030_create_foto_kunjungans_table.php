<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('foto_kunjungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kunjungan_id')->constrained('kunjungan')->onDelete('cascade');
            $table->string('file_path'); // path file foto
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('foto_kunjungan');
    }
};
