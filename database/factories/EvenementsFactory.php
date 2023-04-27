<?php

namespace Database\Factories;

use App\Models\CategEvents;
use App\Models\EndroitEv;
use App\Models\Organisateurs;
use App\Models\TypeEvents;
use App\Models\Types_events;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvenementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomidEvenement" => $this->faker->firstName(),
            "descidEvenement" => $this->faker->text(300),
            "nbrplaceidEvenement" => $this->faker->numberBetween(1,1000),
            "tokenidEvenement" => $this->faker->password(73,89),
            "heureDebutEvenement" => $this->faker->dateTime(),
            "organis_ev" =>Organisateurs::all()->random()->idOrganisateur,
            "categ_idcateg_ev" => CategEvents::all()->random()->idCategEvenements,
        ];
    }
}

/*
     $table->id('idevent');
            $table->id('idEvenement');
            $table->string('nomidEvenement');
            $table->text('descidEvenement');
            $table->integer('nbrplaceidEvenement');
            $table->string('tokenidEvenement',94)->unique();
            $table->dateTime("heureDebutEvenement");
            $table->integer('organis_ev')->foreign('organis_ev')->references('idOrganisateur')->on('organisateurs');
            $table->integer('categ_idcateg_ev')->foreign('categ_idcateg_ev')->references('idCategEvenements')->on('categ_events');

 */
