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
        Schema::create('makanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('id_brand');
            $table->unsignedBigInteger('id_toko');
            $table->unsignedBigInteger('id_kategori_makanan');
            $table->foreign('id_brand')->references('id')->on('brand')->onDelete('cascade');
            $table->foreign('id_toko')->references('id')->on('toko')->onDelete('cascade');
            $table->foreign('id_kategori_makanan')->references('id')->on('kategori_makanan')->onDelete('cascade');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->string('ukuran');
            $table->string('diskon');
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan');
    }
};
