<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    // Relacion con aprenidiz (1:m)

    public function aprendices()
    {
        return $this->hasMany(Aprendiz::class, 'id');
    }

    // Relacion con instructor (m:m)

    public function instructores()
    {
        return $this->belongsToMany(Instructor::class, 'instructor_ficha');
    }

    // Relacion con tematica (1:m)

    public function tematicas()
    {
        return $this->hasMany(Tematica::class, 'id');
    }

    // Relacion con programa (m:1)

    public function programas()
    {
        return $this->belongsTo(Programa::class, 'id_programa');
    }
}
