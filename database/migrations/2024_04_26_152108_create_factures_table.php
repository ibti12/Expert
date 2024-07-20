<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('contact');
            $table->date('date');
            $table->date('nom');
            $table->date('plus');
            $table->date('montant');
            $table->date('type');
            $table->boolean('validation')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factures');
    }
};
