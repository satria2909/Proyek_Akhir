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
        Schema::create('transaksi', function (Blueprint $table) {

            $table->string('id',6)->primary();
            $table->string('id_buku',6);
            $table->string('id_pelanggan',6);
            $table->timestamps();
            $table->integer('jumlah');
            $table->string('total_harga');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('transaksi');
    }
};
