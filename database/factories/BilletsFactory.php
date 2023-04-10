<?php

namespace Database\Factories;

use App\Models\Modelprod;
use Illuminate\Database\Eloquent\Factories\Factory;

class BilletsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombillet"=>$this->faker->firstName(),
            "descriplace" => $this->faker->text(200),
            "token_billet" => $this->faker->password(60,85),
            "model_idModel" => Modelprod::all()->random()->idmodelprods
        ];
    }
}

/*
    $table->id("idbillet");
            $table->string('nombillet');
            $table->string('descriplace');
            $table->string('token_billet',89)->unique();
            $table->integer('model_idModel')->foreign('model_idModel')->references('idmodelprods')->on('modelprods');
            $table->timestamps();
 */
