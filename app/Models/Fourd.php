<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourd extends Model
{
    use HasFactory;

    // Nom de la table
    protected $table = 'fourd';

    // Clé primaire
    protected $primaryKey = 'id';

    // Champs remplissables
    protected $fillable = [
        'nom',
    ];

    // Désactiver les timestamps si la table ne les utilise pas
    public $timestamps = false;
}

