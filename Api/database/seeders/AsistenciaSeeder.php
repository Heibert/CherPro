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
        $u = new Asistencia();
        $u->fechaAsistencia = "2022-01-01";
        $u->idAprendiz = "1";
        $u->idTematica = "1";
        $u->save();
    }
}
