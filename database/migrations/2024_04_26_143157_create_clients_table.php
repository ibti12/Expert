<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('NOM');
            $table->string('ADRESSE');
            $table->string('VILLE');
            $table->string('SITES');
            $table->string('GPS')->nullable();
            $table->string('ICE');
            $table->string('TP');
            $table->string('IF');
            $table->string('CNSS');
            $table->string('TELEPHONE');
            $table->string('EMAIL');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
