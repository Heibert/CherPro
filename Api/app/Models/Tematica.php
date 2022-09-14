<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tematica extends Model
{
    use HasFactory;

    // Relacion con trimestre (m:m)

    public function trimestres(){
        return $this->belongsToMany(Trimestre::class, 'tematica:trimestre');
    }

    // Relacion con ficha (m:1)

    public function instructores(){
        return $this->belongsTo(Instructor::class, 'id_instructor');
    }
    
    public function fichas(){
        return $this->belongsTo(Ficha::class, 'id_ficha');
    }

    // Relacion con programa (m:1)

    public function programas(){
        return $this->belongsTo(Programa::class, 'id_programa');
    }

    // Relacion con instructor (m:1)

 
}
