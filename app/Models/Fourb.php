<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourb extends Model
{
    use HasFactory;

    protected $table = 'Fourbs';

    protected $fillable = [
        'numero',
        'date',
        'nom',
        'plus',
    ];
}
