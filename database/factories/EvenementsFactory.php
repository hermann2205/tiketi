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
            "nom_event" => $this->faker->firstName(),
            "descript_event" => $this->faker->text(300),
            "nbr_places" => $this->faker->numberBetween(1,1000),
            "token_evenem" => $this->faker->password(73,89),
            "organis_ev" =>Organisateurs::all()->random()->idorganis,
            "typeEv_idtypeEv" => TypeEvents::all()->random()->idtypecat_ev,
            "endroitev_idEndroitEv" => EndroitEv::all()->random()->idendroit_ev
        ];
    }
}

/*
     $table->id('idevent');
            $table->string('nom_event');
            $table->text('descript_event');
            $table->integer('nbr_places');
            $table->string('token_evenem',94)->unique();
            $table->integer('typeEv_idtypeEv')->foreign('typeEv_idtypeEv')->references('idtypecat_ev')->on('types_events');
            $table->integer('endroitev_idEndroitEv')->foreign('endroitev_idEndroitEv')->references('idendroit_ev')->on('modelprods');
            $table->timestamps();
 */
