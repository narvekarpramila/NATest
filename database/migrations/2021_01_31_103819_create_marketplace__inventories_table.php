<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketplaceInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketplace__inventories', function (Blueprint $table) {
            $table->id();
            $table->double('KM');
            $table->string('major_scratches');
            $table->string('original_paints');
            $table->string('no_of_addidents');
            $table->string('no_of_prev_buyers');
            $table->string('registration_place');
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
        Schema::dropIfExists('marketplace__inventories');
    }
}
