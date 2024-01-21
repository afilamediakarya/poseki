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
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->enum('jenisPohon', ['[perumahan', 'public']);
            $table->text('alasan');
            $table->integer('noPermohonan');
            $table->year('tahun');
            $table->dateTime('tanggalPermohonan');
            $table->string('gambarLokasi');
            $table->string('Kecamatan', 100);
            $table->string('kelurahan', 100);
            $table->enum('status', ['diproses', 'sukses']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonans');
    }
};
