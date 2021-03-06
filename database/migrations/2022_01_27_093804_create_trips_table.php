<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);  //
            $table->string('city_destination', 50);//
            $table->string('state', 50);//
            $table->smallInteger('price');//
            $table->date('date_departure');//
            $table->tinyInteger('duration');//
            $table->text('description');//
            $table->tinyInteger('minimum_partecipants');//
            $table->boolean('under_18')->default(0);
            $table->boolean('available')->default(1);
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
        Schema::dropIfExists('trips');
    }
}