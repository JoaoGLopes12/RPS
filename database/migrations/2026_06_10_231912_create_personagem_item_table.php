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
    {Schema::create('personagem_item', function (Blueprint $table) {

    $table->id();

    $table->foreignId('personagem_id')
          ->constrained('personagens')
          ->cascadeOnDelete();

    $table->foreignId('item_id')
          ->constrained('itens')
          ->cascadeOnDelete();

    $table->integer('quantidade')
          ->default(1);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagem_item');
    }
};
