<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistriQt extends Model
{
    use HasFactory;

    protected $table = 'distriqt';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'email',
        'password',
        'nome_prodotto',
        'valutazione',
        'regione',
        'nazione',
        'tariffa_oraria',
        'tariffa_oraria',
        'tariffa_settimanale',
        'tariffa_mensile',
        'foto',
        'struttura_3d',
        'nome_proprietario',
        'foto_proprietario',
        'anni_esperienza',
        'descrizione',
        'caratteristiche_esterne',
        'specifiche',
        'stile',
        'colore',
        'elevazione',
        'luce',
    ];

    protected $casts = [
        'foto' => 'array', // Converte automaticamente il campo 'foto' da JSON a un array PHP
    ];

    // Se hai relazioni con altre tabelle, puoi definirle qui
}
