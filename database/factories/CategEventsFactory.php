<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategEventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                "nomCategEvenements" => $this->faker->streetName(),
                "descCategEvenements" => $this->faker->text(250),
                "pictCategEvenements" => $this->faker->fileExtension(),
                'tokenCategEvenements' => $this->faker->password(35,60),
                "modecateg"=> $this->faker->streetName();

        ];
    }
}
/*

           $table->id('idCategEvenements');
            $table->string('nomCategEvenements');
            $table->text('descCategEvenements');
            $table->string('pictCategEvenements');
            $table->string('tokenCategEvenements',79)->unique();
            $table->timestamps();
*/
