<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('model_name')->unique();
            $table->text('price');
            $table->integer('brand_id');
            $table->string('color');
            $table->integer('noOfSeats');
            $table->text('engine_type');
            $table->string('fuel_tank_capacity');
            $table->text('image_id');
            $table->integer('mileage');
            $table->string('fuel_type');
            $table->string('condition');
            $table->string('gear_type');
            $table->text('description');
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
        Schema::dropIfExists('cars');
    }
}
