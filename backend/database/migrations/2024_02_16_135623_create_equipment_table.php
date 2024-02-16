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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('password');
            $table->string('nome_prodotto');
            $table->integer('valutazione');
            $table->string('citta');
            $table->string('regione');
            $table->string('nazione');
            $table->decimal('tariffa_oraria', 10, 2);
            $table->decimal('tariffa_settimanale', 10, 2);
            $table->decimal('tariffa_mensile', 10, 2);
            $table->string('username');
            $table->string('foto_utente')->nullable();
            $table->string('indirizzo');
            $table->text('descrizione');
            // Aggiungi qui eventuali altri campi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
