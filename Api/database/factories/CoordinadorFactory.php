<?php

namespace Database\Factories;

use App\Models\Coordinacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coordinador>
 */
class CoordinadorFactory extends Factory
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
                "nomCoordinador" => $this->faker->firstName(),
                "apeCoordinador" => $this->faker->lastName(),
                "tipoDoc" => $this->faker->randomElement(['CC']),
                "numDoc" => $this->faker->unique(true)->numberBetween(1, 500),
                "correoMisena" => $nombre . $correoSena,
                "telefonoCoordinador" => $this->faker->randomNumber(5, true),
                "id_coordinacion" => Coordinacion::all()->random()->id,
                "estado" => $this->faker->randomElement(['Activo', 'Inactivo'])
            ];
    }
}
