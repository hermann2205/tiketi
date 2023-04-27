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

            "nomadmins"=>$this->faker->firstName(),
            "pseudoadmins"=>$this->faker->lastName(),
            "pictadmins"=> $this->faker->domainName(),
            'tokenadmins' => $this->faker->password(45,76),
            "compte_idCompte" => Comptes::all()->random()->idcompte
        ];
    }
}

/*
            $table->id('idadmins');
            $table->string('nomadmins');
            $table->string('pseudoadmins');
            $table->string('pictadmins');
            $table->string('tokenadmins')->unique();
            $table->Integer('compte_idCompte')->foreign('compte_idCompte')->references('idcompte')->on('comptes');
            $table->timestamps();
 */
