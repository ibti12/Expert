<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Devis;

class DevisSeeder extends Seeder
{
    public function run()
    {
        Devis::create([
            'N°' => 'Votre valeur',
            'date' => now(),
        ]);
    }
}
