<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aprendiz;

class Asistencia extends Model
{
    use HasFactory;
    
    // Relacion con aprendiz (m:1)

    public function aprendices(){
        return $this->belongsTo(Aprendiz::class, 'id_aprendiz');
    }

    // Relacion con excusa (1:1)

    public function excusas(){
        return $this->hasOne(Excusa::class);
    }
}
