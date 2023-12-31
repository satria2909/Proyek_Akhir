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
        Schema::create('buku', function (Blueprint $table) {

            $table->string('id',6)->primary();
            $table->string('judul',);
            $table->string('gambar')->nullable();
            $table->integer('persediaan');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('buku');
    }
};
