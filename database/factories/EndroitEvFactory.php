<?php

namespace Database\Factories;

use App\Models\TypeEvents;
use App\Models\Types_events;
use Illuminate\Database\Eloquent\Factories\Factory;

class EndroitEvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomendroit_ev"=> $this->faker->firstName(),
            "longitude_endroit_ev" => $this->faker->longitude($min = -180, $max = 180),
            "latitude_endroit_ev" => $this->faker->latitude($min = -180 , $max = 180),
            "typeEv_idTypeEv" => TypeEvents::all()->random()->idtypecat_ev

        ];
    }
}

/*
             $table->id('idendroit_ev');
            $table->string('nomendroit_ev');
            $table->double('longitude_endroit_ev');
            $table->double('latitude_endroit_ev');
            $table->integer('typeEv_idTypeEv')->foreign('typeEv_idTypeEv')->references('idendroit_ev')->on('types_events');
            $table->timestamps();

*/
