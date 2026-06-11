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
     Schema::create('npcs', function (Blueprint $table) {

    $table->id();

    $table->string('nome');

    $table->text('descricao');

    $table->integer('nivel');

    $table->integer('hp');

    $table->integer('mana');

    $table->decimal('dinheiro',10,2)
          ->default(0);

    $table->foreignId('raca_id')
          ->constrained('racas');

    $table->foreignId('classe_id')
          ->constrained('classes');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('npcs');
    }
};
