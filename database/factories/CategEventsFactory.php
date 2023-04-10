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
"nom_categ_ev" => $this->faker->streetName(),
"descript_categ_ev" => $this->faker->text(250),
"photo_categ_ev" => $this->faker->fileExtension(),
"theme_categ_ev" => $this->faker->colorName(),
'token_cat' => $this->faker->password(35,60),
'level_categ_ev'=> $this->faker->numberBetween(1,8)
        ];
    }
}
/*

            $table->id('idcateg_ev');
            $table->string('nom_categ_ev');
            $table->text('descript_categ_ev');
            $table->string('photo_categ_ev');
            $table->string('theme_categ_ev');
            $table->string('token_cat',79)->unique();
            $table->integer('level_categ_ev');
            $table->timestamps();
*/
