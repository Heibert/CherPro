<?php

namespace Database\Factories;

use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coordinacion>
 */
class CoordinacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nomCoordinacion" => $this->faker->unique()->randomElement(['Coordinacion del CGMLTI','Coordinacion Academica','Coordinacion del Centro de Salud','Coordinacion de Finanzas','Coordinacion del centro de formacion en diseño','Coordinacion del centro para la Biodiversidad','Coordinacion del centro de formacion en moda','Coordinacion del centro de formacion en deportes','Coordinacion del centro de formacion en agricultura','Coordinacion del centro de formacion en aviacion','Coordinacion del centro de formacion en petroquimica']),
            /* "idPrograma" => Programa::all()->random()->id */
        ];
    }
}
