<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asistencia;

class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Asistencia::factory(10)->create();
        
    }
}

/*      $u = new Asistencia();
        $u->$faker->date('Y-M-D');
        $u->idAprendiz = "1";
        $u->idTematica = "1";
        $u->save();
        for ($i=0; $i < 11; $i++) { 
            $u = new Asistencia();
            $u->fechaAsistencia = "2000-15-22";
            $u->idAprendiz = "1";
            $u->idTematica = "1";
            $u->save(); 
            }*/
