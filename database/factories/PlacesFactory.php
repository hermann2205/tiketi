<?php

namespace Database\Factories;

use App\Models\CategoriePlaces;
use App\Models\CategoriesPlaceInEvenements;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlacesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "descPlace" => $this->faker->text(50),
            "is_free" => $this->faker->numberBetween(0,1),
            "tokenPlace" => $this->faker->password(60,90),
            "categplaceinev_idCategplaceinev" => CategoriesPlaceInEvenements::all()->random()->idCategoriePlaceInEvenements,
        ];

        /*

          $table->id("idPlace");
            $table->string('descPlace');
            $table->integer('is_free');
            $table->string('tokenPlace');
            $table->integer('categ_idcateg_place')->foreign('categ_idcateg_place')->references('idCategoriePlaces')->on('categorie_places');

              $table->integer("categplaceinev_idCategplaceinev")->foreign('categplaceinev_idCategplaceinev')->references('idCategoriePlaceInEvenements')->on('categories_place_in_evenements');


            $table->timestamps();
        */
    }
}
