<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonsTable extends Migration
{
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->string('lieu');
            $table->date('date');
            $table->date('nom');
            $table->boolean('status')->default(false);
            $table->date('N°dossiers');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('livraisons');
    }


};
