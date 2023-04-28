<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id("idPlace");
            $table->string('descPlace');
            $table->integer('is_free');
            $table->string('tokenPlace');
            $table->integer("categplaceinev_idCategplaceinev")->foreign('categplaceinev_idCategplaceinev')->references('idCategoriePlaceInEvenements')->on('categories_place_in_evenements');
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
        Schema::dropIfExists('places');
    }
}
