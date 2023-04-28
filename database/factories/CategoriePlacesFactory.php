<?php

namespace Database\Factories;

use App\Models\CategoriesPlaceInEvenements;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriePlacesFactory extends Factory
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
            "descCategoriePlaces" => $this->faker->text(50),
            "nomCategoriePlaces" => $this->faker->firstName(),
            "tokenCategoriePlaces" => $this->faker->password(50,90),

        ];

        /*
        create('categorie_places', function (Blueprint $table) {
            $table->id('idCategoriePlaces');
            $table->string('descCategoriePlaces');
            $table->string('nomCategoriePlaces');
            $table->string('tokenCategoriePlaces');
                    $table->timestamps();

        */
    }
}
