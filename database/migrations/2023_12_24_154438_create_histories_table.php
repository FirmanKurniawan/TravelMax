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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('nama');
            $table->string('nik')->unique()->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir');
            $table->text('alamat')->nullable();
            $table->string('no_telepon');
            $table->enum('status_pernikahan', ['Belum Menikah', 'Menikah', 'Cerai'])->default('Belum Menikah')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_kk')->nullable();
            $table->string('foto_dokumen_lainnya')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('no_paspor')->nullable();
            $table->date('tanggal_paspor_dikeluarkan')->nullable();
            $table->date('tanggal_paspor_expired')->nullable();
            $table->string('asal_migrasi_paspor')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('status_payment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
