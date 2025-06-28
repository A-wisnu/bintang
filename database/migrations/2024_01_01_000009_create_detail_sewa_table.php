<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_sewa', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_sewa');
            $table->unsignedBigInteger('id_console')->nullable();
            $table->unsignedBigInteger('id_game')->nullable();
            $table->integer('jumlah')->default(1);
            $table->decimal('harga_satuan', 10, 2);
            $table->decimal('subtotal', 12, 2);
            $table->timestamps();

            $table->foreign('id_sewa')->references('id_sewa')->on('sewa')->onDelete('cascade');
            $table->foreign('id_console')->references('id_console')->on('consoles')->onDelete('set null');
            $table->foreign('id_game')->references('id_game')->on('games')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_sewa');
    }
}; 