<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Dossier;
use Carbon\Carbon;

class DossiersTableSeeder extends Seeder
{
    public function run()
    {
        // Insérer des données dans la table dossiers avec une date spécifique
        Dossier::create([
            'N°dossier' => 'Votre valeur',
            'type' => 'Votre valeur',
            'nom' => 'Votre valeur',
            'date' => Carbon::createFromFormat('Y-m-d', '2024-04-26'), // Utilisez Carbon pour créer une date à partir d'un format spécifique
            'details' => 'Votre valeur',
        ]);
    }
}
