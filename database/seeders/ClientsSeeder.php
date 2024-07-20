<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'NOM' => 'Nom du client',
            'ADRESSE' => 'Adresse du client',
            'VILLE' => 'Ville du client',
            'SITES' => 'Sites du client',
            'GPS' => 'Coordonnées GPS du client',
            'ICE' => 'ICE du client',
            'TP' => 'TP du client',
            'IF' => 'IF du client',
            'CNSS' => 'CNSS du client',
            'TELEPHONE' => 'Téléphone du client',
            'EMAIL' => 'Email du client',
        ]);
    }
}

