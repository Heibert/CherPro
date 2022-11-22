<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instructor;
use App\Models\Programa;
use Faker\Generator as Faker;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /* function (Faker $faker) */
    public function run()
    {
        for ($i=1; $i < 9; $i++) { 
            $I = new Instructor();
            $I -> nombreInst = $faker->firstName();
            $I -> apellidoInst = $thisaker->lastName();
            $I -> tipoDoc = $faker->randomElement(['Cedula', 'TI']);
            $I -> numDoc = $faker->unique(true)->numberBetween(1, 2500);
            $I -> id_user = $i;
            $I -> telefonoInst = $faker->randomNumber(5, true);
            $I -> id_programa = Programa::all()->random()->id;
            $I -> estado = $faker->randomElement(['Activo', 'Inactivo']);
            $I -> save();
        }
    }
}
