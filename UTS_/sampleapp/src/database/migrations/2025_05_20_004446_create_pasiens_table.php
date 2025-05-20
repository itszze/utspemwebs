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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama'); // Nama lengkap pasien
            $table->string('nik', 16)->unique(); // NIK (harus unik)
            $table->date('tanggal_lahir'); // Tanggal lahir pasien
            $table->enum('jenis_kelamin', ['L', 'P']); // L = Laki-laki, P = Perempuan
            $table->text('alamat'); // Alamat lengkap
            $table->string('no_hp'); // Nomor HP pasien
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
