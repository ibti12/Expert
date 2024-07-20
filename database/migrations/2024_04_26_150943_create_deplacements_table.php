<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeplacementsTable extends Migration
{
    public function up()
    {
        Schema::create('deplacements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('lieu');
            $table->string('nom');
            $table->string('mission');
            $table->timestamps();
            $table->string('reglement')->nullable();
            $table->decimal('avance', 10, 2)->nullable();
            $table->decimal('reste', 10, 2)->nullable();
            $table->boolean('validation')->default(false);
            $table->string('collaborateur')->nullable();
            $table->string('invitation')->nullable();
            $table->string('autre')->nullable();
            $table->decimal('repas', 10, 2)->nullable();
            $table->string('num_dossier')->nullable();
            $table->decimal('taux', 5, 2)->nullable();
            $table->decimal('taxi', 10, 2)->nullable();
            $table->decimal('autoroute', 10, 2)->nullable();
            $table->decimal('parking', 10, 2)->nullable();
            $table->decimal('hotel', 10, 2)->nullable();
            $table->decimal('gasoil', 10, 2)->nullable();
            $table->integer('nbr_jours')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deplacements');
    }


};
