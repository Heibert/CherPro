<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    // Relacion con aprendiz 

    public function aprendices()
    {
        return $this->hasMany(Aprendiz::class, 'id');
    }

    // Relacion con instructor

    public function instructores()
    {
        return $this->hasMany(Instructor::class, 'id');
    }

    // Relacion con coordinacion

    public function coordinadores()
    {
        return $this->hasMany(Coordinador::class, 'id');
    }


}
