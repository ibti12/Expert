<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('N°dossier');
            $table->string('type');
            $table->string('client_nom');
            $table->date('date');
            $table->text('details')->nullable();
            $table->timestamps();
            $table->boolean('annexes')->nullable();
            $table->boolean('photos')->nullable();
            $table->boolean('rap_photos')->nullable();
            $table->boolean('attestation')->nullable();
            $table->boolean('pv')->nullable();
            $table->boolean('PDF')->nullable();
            $table->tboolean('word')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
};
