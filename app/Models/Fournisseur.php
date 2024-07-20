<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    // Spécifiez le nom de la table
    protected $table = 'four';

    // Définissez les champs qui peuvent être assignés en masse
    protected $fillable = [
        'ice',
        'adresse',
        'nom',
        'email',
        'numero',
    ];

    // Si la table n'utilise pas les colonnes created_at et updated_at
    public $timestamps = false;
}
