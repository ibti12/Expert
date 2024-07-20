<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateDepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deps', function (Blueprint $table) {
            $table->id(); // Add an auto-incrementing primary key
            $table->string('it');
            $table->date('date_aller');
            $table->date('date_retour');
            $table->decimal('kilometrage', 8, 2);
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
        Schema::dropIfExists('deps');
    }
}
