<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{

    use HasFactory;

    // Relacion con programas (m:1)

    public function programas(){
        return $this->belongsTo(Programa::class, 'id_programa');
    }
}
