<?php

namespace Database\Factories;

use App\Models\Comptes;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            "nomadmin"=>$this->faker->firstName(),
            "pseudoadmin"=>$this->faker->lastName(),
            "pictadmin"=> $this->faker->domainName(),
            "compte_idCompte" => Comptes::all()->random()->idcompte
        ];
    }
}

/*
            $table->id('idadmin');
            $table->string('nomadmin');
            $table->string('pseudoadmin');
            $table->string('pictadmin');
            $table->Integer('compte_idCompte')->foreign('compte_idCompte')->references('idcompte')->on('comptes');
            $table->timestamps();
 */
