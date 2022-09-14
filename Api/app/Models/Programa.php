<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    // Relacion con administrador (1:m)

    public function administador(){
        return $this->hasMany(Administrador::class, 'id');
    }

    // Relacion con tematica (1:m)

    public function tematicas(){
        return $this->hasMany(Tematica::class, 'id');
    }

    // Relacion con coordinacion (m:1)

    public function coordinaciones(){
        
        return $this->belongsTo(Coordinacion::class, 'id_coordinacion');
    }

    // Relacion con instructor (1:m)

    public function instructores(){
        return $this->hasMany(Instructor::class, 'id');
    }

    //Relacion con ficha (1:m)

    public function fichas(){
        return $this->hasMany(Ficha::class, 'id');
    }
}
