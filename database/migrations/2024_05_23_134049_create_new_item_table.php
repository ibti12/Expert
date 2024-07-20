<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */  
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('ref');
            $table->string('object');
            $table->decimal('prix_unitaire', 8, 2);
            $table->integer('quantité');
            $table->date('date');
            $table->decimal('total_ht', 8, 2);
            // Ajoutez d'autres colonnes si nécessaire

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
        Schema::dropIfExists('item');
    }
};
