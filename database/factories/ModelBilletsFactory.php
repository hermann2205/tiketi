<?php

namespace Database\Factories;

use App\Models\Billets;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelBilletsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "nomModelBillet" => $this->faker->firstName(),
            "pictModelBillet" => $this->faker->lastName(),
            "tokenModel" => $this->faker->password(59,98),
            'billet_idBillet' => Billets::all()->random()->idBillet,
        ];

        /*
          $table->id('idModelBillet');
            $table->string("nomModelBillet");
            $table->string("pictModelBillet");
            $table->string("tokenModel")->unique();
            $table->integer('billet_idBillet')->foreign('billet_idBillet')->references('idBillet')->on('billets');
            $table->timestamps();

        */
    }
}
