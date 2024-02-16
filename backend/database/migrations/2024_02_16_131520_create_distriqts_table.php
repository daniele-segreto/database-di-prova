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
        Schema::create('distriqts', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nome_prodotto');
            $table->integer('valutazione');
            $table->string('citta');
            $table->string('regione');
            $table->string('nazione');
            $table->decimal('tariffa_oraria', 10, 2);
            $table->decimal('tariffa_settimanale', 10, 2);
            $table->decimal('tariffa_mensile', 10, 2);
            $table->json('foto')->nullable();
            $table->boolean('struttura_3d')->default(false);
            $table->string('nome_proprietario');
            $table->string('foto_proprietario')->nullable();
            $table->integer('anni_esperienza');
            $table->text('descrizione');
            $table->text('caratteristiche_esterne')->nullable();
            $table->text('specifiche')->nullable();
            $table->string('stile')->nullable();
            $table->string('colore')->nullable();
            $table->string('elevazione')->nullable();
            $table->string('luce')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distriqts');
    }
};
