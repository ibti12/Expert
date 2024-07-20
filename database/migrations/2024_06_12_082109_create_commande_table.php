<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('nom');
            $table->string('objet');
            $table->string('ref');
            $table->decimal('total_ht', 10, 2); // Total hors taxes avec précision
            $table->integer('quantité'); // Quantité
            $table->date('date'); // Date
            $table->decimal('prix_unitaire', 10, 2); // Prix unitaire avec précision
            $table->string('num_bon'); // Numéro de bon
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande');
    }


};
