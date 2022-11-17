<?php

namespace App\Imports;

use App\Models\Coordinacion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;

class CoordinacionImport implements ToModel, WithHeadingRow, WithBatchInserts,WithChunkReading, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Coordinacion([
            'nomCoordinacion'=> $row['nombre']
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

    public function rules(): array
    {
        return [
             '*.nombre' => [
                'required',
                'min:5',
                'max:36',
                'alpha'
             ],
        ];
    }
}
