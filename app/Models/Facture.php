<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Facture extends Model
{
    protected $fillable = ['numero', 'date', 'validation','nom','plus','type','montant','contact'];
}
