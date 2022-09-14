<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProgramaSeeder::class,
            FichaSeeder::class,
            AprendicesSeeder::class,
            InstructorSeeder::class,
            TematicaSeeder::class,
            AsistenciaSeeder::class,
            CoordinacionSeeder::class
        ]);
    }
}
