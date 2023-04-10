<?php

namespace Database\Factories;

use App\Models\CategEvents;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeEventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomtypecat_ev"=> $this->faker->firstName(),
            "descriptypecat_ev"=> $this->faker->text(300),
            "token_typ"=> $this->faker->password(65,80),
            "categ_idcateg_ev" => CategEvents::all()->random()->idcateg_ev
        ];
    }
}

/*

     $table->id('idtypecat_ev');
            $table->string('nomtypecat_ev');
            $table->text('descriptypecat_ev');
            $table->string('token_typ');
            $table->integer('categ_idcateg_ev')->foreign('categ_idcateg_ev')->references('idcateg_ev')->on('categ_events');
            $table->timestamps();

*/

