<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livraison;

class LivraisonsSeeder extends Seeder
{
    public function run()
    {
        Livraison::create([
            'lieu' => 'Votre valeur',
            'date' => now(), // Ou utilisez Carbon::now() si vous voulez la date actuelle
        ]);
    }
}

