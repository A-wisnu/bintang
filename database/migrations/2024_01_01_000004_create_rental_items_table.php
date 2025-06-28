<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rental_items', function (Blueprint $table) {
            $table->id('id_rental_item');
            $table->unsignedBigInteger('rental_id');
            $table->unsignedBigInteger('id_console')->nullable();
            $table->unsignedBigInteger('id_game')->nullable();
            $table->integer('qty')->default(1);
            $table->decimal('price', 10, 2);
            $table->timestamps();

            $table->foreign('rental_id')->references('id')->on('rentals')->onDelete('cascade');
            $table->foreign('id_console')->references('id_console')->on('consoles')->onDelete('set null');
            $table->foreign('id_game')->references('id_game')->on('games')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rental_items');
    }
}; 