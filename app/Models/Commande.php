<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'objet',
        'ref',
        'total_ht',
        'quantité',
        'date',
        'prix_unitaire',
        'num_bon',
    ];
    
    

    protected $table = 'commande';
    public $timestamps = false;
}
