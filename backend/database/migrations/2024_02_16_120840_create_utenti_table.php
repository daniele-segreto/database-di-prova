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
        Schema::create('utenti', function (Blueprint $table) {
            $table->id();
            $table->string('foto_profilo')->nullable();
            $table->string('nome');
            $table->string('cognome');
            $table->string('email')->unique();
            $table->string('numero_telefono')->nullable()->unique();
            $table->string('password');
            $table->string('conferma_password');
            // Altri campi dell'utente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utenti');
    }
};
