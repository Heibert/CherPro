<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    use HasFactory;


    public function reportes(){
        return $this->hasMany(Reporte::class);
    }
}
