<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ficha;
use App\Models\Estado;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aprendiz>
 */
class AprendizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $correoSena = "@misena.edu.co";
        $nombre = $this->faker->userName();
        return [
            "nombreAprend" => $this->faker->firstName(),
            "apelliAprend" => $this->faker->lastName(),
            "tipoDoc" => $this->faker->randomElement(['Cedula', 'TI']),
            "numDoc" => $this->faker->randomNumber(5, true),
            "correoAprend" => $this->faker->unique()->email,
            "telefonoAprend" => $this->faker->randomNumber(5, true),
            "id_ficha" => Ficha::all()->random()->id,
            "id_user" => User::all()->random()->id,
            "estado" => $this->faker->randomElement(['En formacion', 'Desertrado', 'En aplazamiento']),
        ];
    }
}
