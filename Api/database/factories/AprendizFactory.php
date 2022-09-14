<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ficha;

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
            "correoMisena" => $nombre . $correoSena,
            "correoAprend" => $this->faker->unique()->email,
            "telefonoAprend" => $this->faker->randomNumber(5, true),
            "id_ficha" => Ficha::all()->random()->id,
            /* "password" => $this->faker->sha1(), */
        ];
    }
}
