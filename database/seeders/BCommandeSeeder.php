<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\BCommande;

class BCommandeSeeder extends Seeder
{
    public function run()
    {
        // Insertion des données dans la table b_commandes
        BCommande::create([
            'N°' => 'Votre valeur',
            'date' => '2024-04-26', // Date spécifique à insérer
        ]);
    }
}

