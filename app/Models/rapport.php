<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rapport extends Model
{
    use HasFactory;

    protected $fillable = [
        'N°',
        'date',
        'gsm',
        'email',
        'N°devis',
        'date_devis',
        'N°facture',
        'date_facture',
        'validation',
        'lieu',
        'date_Livraison',
        'Nom',
    ];
}

