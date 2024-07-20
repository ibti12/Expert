<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportTable extends Migration
{
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->string('N°');
            $table->date('date');
            $table->string('gsm');
            $table->string('email');
            $table->string('N°devis');
            $table->date('date_devis');
            $table->string('N°facture');
            $table->date('date_facture');
            $table->string('validation');
            $table->string('lieu');
            $table->date('date_Livraison');
            $table->string('Nom');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rapports');
    }
}
