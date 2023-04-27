<?php

namespace Database\Factories;

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
            "place_idPlace" => Places::all()->random()->idPlace
        ];
    }
}

/*
    $table->id("idBillet");
            $table->string('nomBillet');
            $table->string('tokenBillet',89)->unique();
            $table->integer('place_idPlace')->foreign('place_idPlace')->references('idPlace')->on('places');
            $table->timestamps();
 */
