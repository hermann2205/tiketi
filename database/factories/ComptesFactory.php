<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComptesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'login'=> $this->faker->firstName(),
            'pwd' => $this->faker->password(8,15),
            'email'=>$this->faker->freeEmail(),
            'telcompte'=>$this->faker->phoneNumber(),
            'tokencompte'=>$this->faker->password(25,50),
            'is_connected' => $this->faker->boolean(),
            'is_valid' => $this->faker->boolean()
        ];
    }
}

/*

   $table->id('idcompte');
            $table->string('login');
            $table->string('pwd');
            $table->string('email')->unique();
            $table->string('telcompte');
            $table->string('tokencompte', 128)->unique();
            $table->boolean('is_connected')->default(0);
            $table->boolean('is_valid')->default(0);


*/
