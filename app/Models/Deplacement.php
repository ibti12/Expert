<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deplacement extends Model
{
    protected $table = 'deplacements'; // Nom de la table dans la base de données

    protected $fillable = [ 'date', 'lieu', 'nom', 'mission', 'collaborateur','validation','reglement' ,'avance'	,'reste'  ,'numero'
      , 'num_dossier' ,'repas	','taux	','autoroute'	,'hotel','taxi'	,'parking','invitation','gasoil','autre',	'nbr_jours', ];

    // Vous pouvez ajouter d'autres relations, attributs ou méthodes au besoin
} 