<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    public function programas(){
        return $this->belongsTo(Programa::class, 'id_programa');
    }

}
