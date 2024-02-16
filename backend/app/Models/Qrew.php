<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrew extends Model
{
    use HasFactory;

    protected $table = 'qrew';
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
        'foto_prodotto',
        'foto_utente',
        'nome_utente',
        'indirizzo',
        'descrizione',
        'specializzazioni',
        // Aggiungi qui eventuali altri campi
    ];

    // Se hai relazioni con altre tabelle, puoi definirle qui
}
