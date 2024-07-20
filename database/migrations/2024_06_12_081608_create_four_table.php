<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('four', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom du fournisseur
            $table->string('ice'); // Identifiant Commun de l'Entreprise
            $table->text('adresse'); // Adresse du fournisseur
            $table->string('email')->unique(); // Email du fournisseur
            $table->string('numero'); // Numéro de téléphone du fournisseur
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('four');
    }


};
