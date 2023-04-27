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
            "nomOrganisateur"=>$this->faker->firstName(),
            'postnomOrganisateur'=>$this->faker->lastName(),
            'pseudoOrganisateur'=> $this->faker->userName(),
            'pictOrganisateur' => $this->faker->fileExtension(),
            'descOrganisateur' => $this->faker->text(100),
            'tokenOrganisateur' => $this->faker->password(64,87),
            'compte_idCompte_organis'=> Comptes::all()->random()->idcompte
        ];
    }
}

/*
     $table->id('idOrganisateur');
            $table->string('nomOrganisateur');
            $table->string('postnomOrganisateur');
            $table->string('pseudoOrganisateur');
            $table->string('pictOrganisateur');
            $table->text('descOrganisateur');
            $table->string('tokenOrganisateur');
            $table->Integer('compte_idCompte_organis')->foreign('compte_idCompte_organis')->references('idcompte')->on('comptes');
            $table->timestamps();

*/
