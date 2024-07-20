<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourf extends Model
{
    use HasFactory;
    protected $table = 'fourfs';
    protected $fillable = ['status', 'montant','nom','date_achat','date_paiement'];
}

