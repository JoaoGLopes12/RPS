<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('classes', function (Blueprint $table) {

    $table->id();
    $table->string('nome',100);
    $table->text('descricao',100);
    $table->integer('bonus_hp')->default(0);
    $table->integer('bonus_mana')->default(0);
    $table->integer('bonus_forca')->default(0);
    $table->integer('bonus_destreza')->default(0);
    $table->integer('bonus_constituicao')->default(0);
    $table->integer('bonus_inteligencia')->default(0);
    $table->integer('bonus_sabedoria')->default(0);
    $table->integer('bonus_carisma')->default(0);

    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};