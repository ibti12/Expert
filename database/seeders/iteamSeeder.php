<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CopyDataToNewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oldData = DB::table('reference')->get();

        foreach ($oldData as $data) {
            DB::table('item')->insert([
                'ref' => $data->ref,
                'object' => $data->object,
                'prix_unitaire' => $data->prix_unitaire,
                'quantité' => $data->quantité,
                'date' => $data->date,
                'total_ht' => $data->total_ht,
                // Ajoutez d'autres colonnes si nécessaire
                'created_at' => $data->created_at,
                'updated_at' => $data->updated_at,
            ]);
        }
    }
}
