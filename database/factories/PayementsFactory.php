<?php

namespace Database\Factories;

use App\Models\Evenements;
use App\Models\ModelBillets;
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
            "datepayement" => $this->faker->dateTime(),
            "modePayement" => $this->faker->jobTitle(),
            "modelbillet_idModelbillet" => ModelBillets::all()->random()->idModelBillet,

        ];
    }
}


/*

create('payements', function (Blueprint $table) {
            $table->id('idpayement');
            $table->double('montantpayement');
            $table->dateTime('datepayement');
            $table->string('modePayement');
            $table->integer('modelbillet_idModelbillet')->foreign('modelbillet_idModelbillet')->references('idModelBillet')->on('id_model_billet');
            $table->timestamps();
*/
