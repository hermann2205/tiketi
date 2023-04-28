<?php

namespace Database\Factories;

use App\Models\ModelBillets;
use App\Models\Modelprod;
use App\Models\Places;
use Illuminate\Database\Eloquent\Factories\Factory;

class BilletsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomBillet"=>$this->faker->firstName(),
            "tokenBillet" => $this->faker->password(60,85),
            "is_scanned" => $this->faker->numberBetween(0,1),
            "place_idPlace" => Places::all()->random()->idPlace,
            "modelbilletb_idModelbillet" => ModelBillets::all()->random()->idModelBillet,
        ];
    }
}

/*
    $table->id("idBillet");
            $table->string('nomBillet');
            $table->string('tokenBillet',89)->unique();
            $table->integer('place_idPlace')->foreign('place_idPlace')->references('idPlace')->on('places');
            $table->integer('modelbilletb_idModelbillet')->foreign('modelbilletb_idModelbillet')->references('idModelBillet')->on('model_billets');

            $table->timestamps();
 */
