<?php

namespace Database\Factories;

use App\Models\Comptes;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisateursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom_organis"=>$this->faker->firstName(),
            'postnom_organis'=>$this->faker->lastName(),
            'pseudo_organis'=> $this->faker->userName(),
            'photo_organis' => $this->faker->fileExtension(),
            'descript_organis' => $this->faker->text(100),
            'carteid_organis' => $this->faker->numberBetween(11111111111111,99999999999999),
            'compte_idCompte_organis'=> Comptes::all()->random()->idcompte
        ];
    }
}

/*
  $table->id('idorganis');
            $table->string('nom_organis');
            $table->string('postnom_organis');
            $table->string('pseudo_organis');
            $table->string('photo_organis');
            $table->text('descript_organis');
            $table->string('carteid_organis');
            $table->Integer('compte_idCompte_organis')->foreign('compte_idCompte_organis')->references('idcompte')->on('comptes');
            $table->timestamps();


*/
