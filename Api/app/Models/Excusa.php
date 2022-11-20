<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excusa extends Model
{
    use HasFactory;

     // Relacion con asistencia (1:1)
    
     public function asistencias(){
        return $this->belongsTo(Asistencia::class, 'id_asistencia');
    }
                                  
    // Relacion con instructor (1:M)

    public function instructores(){
        return $this->belongsTo(Instructor::class, 'id_instructor');
    }
}
