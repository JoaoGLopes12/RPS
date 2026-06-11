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
     Schema::create('personagens', function (Blueprint $table) {

    $table->id();

    $table->foreignId('user_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->string('nome');

    $table->integer('nivel')->default(1);

    $table->integer('experiencia')->default(0);

    $table->foreignId('raca_id')
          ->constrained('racas');

    $table->foreignId('classe_id')
          ->constrained('classes');

    $table->integer('forca_base')->default(0);
    $table->integer('destreza_base')->default(0);
    $table->integer('constituicao_base')->default(0);
    $table->integer('inteligencia_base')->default(0);
    $table->integer('sabedoria_base')->default(0);
    $table->integer('carisma_base')->default(0);
    $table->integer('hp')->default(100);
    $table->integer('mana')->default(50);
    $table->decimal('dinheiro',10,2)
          ->default(0);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagens');
    }
};
