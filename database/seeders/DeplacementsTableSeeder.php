<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deplacement;

class DeplacementsTableSeeder extends Seeder
{
    public function run()
    {
        // Insérer des données dans la table deplacements
        Deplacement::create([
            'date' => '2024-04-26',
            'lieu' => 'Votre valeur',
            'nom' => 'Votre valeur',
            'mission' => 'Votre valeur',
            'frais' => 'Votre valeur',
        ]);
    }
}

