<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rapport;

class RapportsSeeder extends Seeder
{
    public function run()
    {
        Rapport::create([
            'N°' => '[value-2]',
            'date' => '[value-3]',
            'gsm' => '[value-4]',
            'email' => '[value-5]',
            'N°devis' => '[value-6]',
            'date_devis' => '[value-7]',
            'N°facture' => '[value-8]',
            'date_facture' => '[value-9]',
            'validation' => '[value-10]',
            'lieu' => '[value-11]',
            'date_Livraison' => '[value-12]',
            'Nom' => '[value-13]',
        ]);
    }
}

