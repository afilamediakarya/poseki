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
        Schema::create('pohons', function (Blueprint $table) {
            $table->id();
            $table->string('namaPohon', 100);
            $table->string('alamatPohon', 100);
            $table->integer('jumlahPohon');
            $table->string('gambar');
            $table->string('jenisPohon', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pohons');
    }
};
