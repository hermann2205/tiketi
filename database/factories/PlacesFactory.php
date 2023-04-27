<?php

namespace Database\Factories;

use App\Models\CategoriePlaces;
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
            "categ_idcateg_place" => CategoriePlaces::all()->random()->idCategoriePlaces,
        ];

        /*

          $table->id("idPlace");
            $table->string('descPlace');
            $table->integer('is_free');
            $table->string('tokenPlace');
            $table->integer('categ_idcateg_place')->foreign('categ_idcateg_place')->references('idCategoriePlaces')->on('categorie_places');
            $table->timestamps();
        */
    }
}
