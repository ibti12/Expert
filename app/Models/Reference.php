<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
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
        'num_fact',
    ];
    
    

    protected $table = 'references';
    public $timestamps = false;
}
