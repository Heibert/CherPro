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
        return [
            $correoSena = "@misena.edu.co",
            $nombre = $this->faker->userName(),
            "nombreAprend" => $this->faker->name(),
            "apelliAprend" => $this->faker->lastName(),
            "tipoDoc" => $this->faker->randomElement(['Cedula', 'TI']),
            "numDoc" => $this->faker->randomNumber(5, true),
            "correoMisena" => $nombre.$correoSena,
            "correoAprend" => $this->faker->unique()->email,
            "telefonoAprend" => $this->faker->unique()->phoneNumber,
            "id_ficha" => Ficha::all()->random()->id,
            "password" => $this->faker->sha1(),
        ];
    }
}
