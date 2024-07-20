<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'N°dossier',
        'type',
        'client_nom',
        'date',
        'details',
         'details' ,
        'annexes' ,
        'photos' ,
        'rap_photos' ,
        'attestation' ,
        'pv' ,
        'PDF' , 
        'word' , 
    ];
    
}
