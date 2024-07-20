<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dep extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date_aller',
        'date_retour',
        'kilometrage',
        'it',
    ];
}


