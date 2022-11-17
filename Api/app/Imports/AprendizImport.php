<?php

namespace App\Imports;

use App\Models\Aprendiz;
use App\Models\Ficha;
use App\Models\Estado;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class AprendizImport implements ToModel, WithHeadingRow, WithBatchInserts,WithChunkReading
{
    private $fichas;
    private $estados;
    public function __construct()
    {
        $this->fichas = Ficha::pluck('id', 'numFicha');
        $this->estados = Estado::pluck('id', 'nomEstado');
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aprendiz([
            'nombreAprend'=> $row['nombre'],
            'apelliAprend'=> $row['apellido'],
            'tipoDoc'=> $row['tipo_de_documento'],
            'numDoc'=> $row['numero_de_documento'],
            'correoMisena'=> $row['correo_misena'],
            'correoAprend'=> $row['correo_personal'],
            'telefonoAprend'=> $row['telefono_del_aprendiz'],
            'id_ficha'=> $this->fichas[$row['ficha']],
            'id_estados'=> $this->estados[$row['estado']],

        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }
    
    public function chunkSize(): int
    {
        return 1000;
    }
}
