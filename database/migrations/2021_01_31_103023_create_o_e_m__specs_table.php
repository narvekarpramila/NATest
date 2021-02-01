<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOEMSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_e_m__specs', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->integer('year_of_model');
            $table->double('price');
            $table->string('color');
            $table->double('mileage');
            $table->double('power');
            $table->double('max_speed');
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
        Schema::dropIfExists('o_e_m__specs');
    }
}
