<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesPlaceInEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_place_in_evenements', function (Blueprint $table) {
            $table->id("idCategoriePlaceInEvenements");
            $table->string('nbrePersonneCategoriePlace');
            $table->string("tokenPlaceInEvenement")->unique();
            $table->integer('evenement_idEvenement')->foreign('evenement_idEvenement')->references('idEvenement')->on('Evenements');
            $table->integer('CategPlc_idCategPlc')->foreign('CategPlc_idCategPlc')->references('idCategoriePlaces')->on('categorie_places');
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
        Schema::dropIfExists('categories_place_in_evenements');
    }
}
