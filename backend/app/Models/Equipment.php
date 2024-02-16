<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'email',
        'password',
        'nome_prodotto',
        'valutazione',
        'citta',
        'regione',
        'nazione',
        'tariffa_oraria',
        'tariffa_settimanale',
        'tariffa_mensile',
        'username',
        'foto_utente',
        'indirizzo',
        'descrizione',
        // Aggiungi qui eventuali altri campi
    ];

    // Se hai relazioni con altre tabelle, puoi definirle qui
}
