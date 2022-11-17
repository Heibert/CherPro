<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $fillable = [
    'nombreAprend',
    'apelliAprend',
    'tipoDoc',
    'numDoc',
    'correoMisena',
    'correoAprend',
    'telefonoAprend',
    'id_ficha',
    'id_estados'
    ];

    // Relacion con ficha (m:1)
    protected $table = "Aprendices";
    public function fichas(){
        return $this->belongsTo(Ficha::class, 'id_ficha');
    }

    // Relacion con asistencia (1:m)

    public function asistencias(){
        return $this->hasMany(Asistencia::class, 'id');
    }

    //Relacion con estados 

    public function estados(){
        return $this->belongsTo(Estado::class, 'id_estados');
    }
}
