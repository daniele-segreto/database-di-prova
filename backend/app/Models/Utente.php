<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    use HasFactory;

    protected $table = 'utenti';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'foto_profilo',
        'nome',
        'cognome',
        'email',
        'numero_telefono',
        'password',
        'conferma_password',
        // Aggiungi qui gli altri campi se necessario
    ];

    protected $hidden = [
        'password', // Se vuoi nascondere il campo password
        'conferma_password', // Se vuoi nascondere il campo conferma_password
    ];

    // Se hai relazioni con altre tabelle, puoi definirle qui
}
