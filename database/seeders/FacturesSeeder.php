<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facture;
use Carbon\Carbon;
class FacturesSeeder extends Seeder
{
    public function run()
    {
        Facture::create([
            'numero' => '123',
            'date' => now(),
            'validation' => 1, // Assurez-vous que la valeur est un entier
        ]);

        // Insérez d'autres factures si nécessaire
    }
}


