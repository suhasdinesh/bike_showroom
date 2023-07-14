<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bike_id')->references('id')->on('bikes');
            $table->float('cubic_capacity');
            $table->integer('cylinders');
            $table->string('engine_type');
            $table->float('max_torque');
            $table->float('max_power');
            $table->string('body_type');
            $table->float('max_speed');
            $table->float('fuel_capacity');
            $table->integer('transmission');
            $table->float('kerb_weight');
            $table->float('seat_height');
            $table->string('braking_type');
            $table->string('wheels_type');
            $table->string('chasssis');
            $table->string('tyre_size');
            $table->foreignId('color_id')->references('id')->on('bikes');
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
        Schema::dropIfExists('specs');
    }
}
