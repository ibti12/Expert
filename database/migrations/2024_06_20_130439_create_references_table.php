<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('objet');
            $table->string('ref');
            $table->decimal('total_ht', 15, 2);
            $table->integer('quantité');
            $table->date('date');
            $table->decimal('prix_unitaire', 15, 2);
            $table->string('num_fact');
            $table->timestamps();  // Ajoute les colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('references');
    }
}
