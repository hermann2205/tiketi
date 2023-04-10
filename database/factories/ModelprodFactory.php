<?php

namespace Database\Factories;

use App\Models\Evenements;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelprodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomModel" => $this->faker->userName(),
            'descriptModel' => $this->faker->text(300),
            'lienModel' => $this->faker->text(18),
            'token_prod'=>$this->faker->password(34,80),
            'event_idevent_model'=>Evenements::all()->random()->idevent
        ];
    }
}


/*
   $table->id('idmodelprods');
            $table->string('nomModel');
            $table->text('descriptModel');
            $table->string('lienModel');
            $table->string('token_prod')->unique();
            $table->integer('event_idevent_model')->foreign('event_idevent_model')->references('idevent')->on('evenements');
            $table->timestamps();
 */
