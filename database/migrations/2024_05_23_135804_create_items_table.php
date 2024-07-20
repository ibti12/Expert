<?php

// database/migrations/{timestamp}_create_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('ref');
            $table->string('object');
            $table->decimal('prix_unitaire', 8, 2);
            $table->integer('quantite');
            $table->date('date');
            $table->decimal('total_ht', 8, 2);
            $table->timestamps();
            $table->foreignId('num_devis')->constrained('devis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
