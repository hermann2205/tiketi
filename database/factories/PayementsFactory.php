<?php

namespace Database\Factories;

use App\Models\Evenements;
use Illuminate\Database\Eloquent\Factories\Factory;

class PayementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "montantpayement" => $this->faker->numberBetween(1000,99999999),
            "tokenpayement" => $this->faker->password(45,92),
            "event_idevent_payement"=>Evenements::all()->random()->idevent,
            "devise" => $this->faker->firstName()
        ];
    }
}


/*

 $table->id('idpayement');
            $table->double('montantpayement');
            $table->string('tokenpayement');
            $table->string('devise');

*/
