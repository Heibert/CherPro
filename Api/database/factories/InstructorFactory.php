<?php

namespace Database\Factories;

use App\Models\Programa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
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
            "nombreInst" => $this->faker->firstName(),
            "apellidoInst" => $this->faker->lastName(),
            "tipoDoc" => $this->faker->randomElement(['Cedula', 'TI']),
            "numDoc" => $this->faker->unique(true)->numberBetween(1, 2500),
            "id_user" => $this->faker->unique(true)->randomElement([1,2,3,4,5,6,7,8,9]),
            "telefonoInst" => $this->faker->randomNumber(5, true),
            "id_programa" => Programa::all()->random()->id,
            "estado" => $this->faker->randomElement(['Activo', 'Inactivo'])
        ];
    }
}
