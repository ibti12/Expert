<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBCommandesTable extends Migration
{
    public function up()
    {
        Schema::create('b_commandes', function (Blueprint $table) {
            $table->id();
            $table->string('N°');
            $table->date('date');
            $table->date('nom');
            $table->date('plus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('b_commandes');
    }
};
