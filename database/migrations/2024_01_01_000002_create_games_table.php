<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id('id_game');
            $table->string('title', 100);
            $table->string('genre', 50);
            $table->unsignedBigInteger('id_console');
            $table->decimal('daily_rate', 10, 2);
            $table->string('image', 255)->nullable();
            $table->integer('stock')->default(0);
            $table->timestamps();

            $table->foreign('id_console')->references('id_console')->on('consoles')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
}; 