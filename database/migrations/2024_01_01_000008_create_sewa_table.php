<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->id('id_sewa');
            $table->unsignedBigInteger('id_user');
            $table->dateTime('tanggal_sewa');
            $table->dateTime('tanggal_kembali');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['Booked', 'Returned']);
            $table->enum('metode_bayar', ['COD', 'Transfer']);
            $table->enum('status_bayar', ['Belum', 'Sudah']);
            $table->string('bukti_bayar', 100)->nullable();
            $table->string('keterangan', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
}; 