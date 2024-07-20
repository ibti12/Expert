<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    // Définissez les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'ref', 'object', 'prix_unitaire', 'quantité', 'date', 'total_ht'
    ];
}

