<?php

namespace Database\Factories;

use App\Models\CategoriePlaces;
use App\Models\Evenements;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesPlaceInEvenementsFactory extends Factory
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
            "nbrePersonneCategoriePlace" => $this->faker->numberBetween(200,900),
            "tokenPlaceInEvenement" => $this->faker->password(70,90),
            "evenement_idEvenement" => Evenements::all()->random()->idEvenement,
            "CategPlc_idCategPlc" => CategoriePlaces::all()->random()->idCategoriePlaces,
            "priceCategInplace" => $this->faker->random_int(1000,9999),
            'devise' => $this->faker->jobTitle()
        ];


        /*
create('categories_place_in_evenements', function (Blueprint $table) {
            $table->id("idCategoriePlaceInEvenements");
            $table->string('nbrePersonneCategoriePlace');
            $table->string("tokenPlaceInEvenement")->unique();
            $table->integer('evenement_idEvenement')->foreign('evenement_idEvenement')->references('idEvenement')->on('Evenements');
            $table->integer('CategPlc_idCategPlc')->foreign('CategPlc_idCategPlc')->references('idCategoriePlaces')->on('categorie_places');
            $table->timestamps();

        */
    }
}
