<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
    use HasFactory;

    // Relacion con coordinador (1:1)
    protected $table = "coordinacions";
    public function coordinadores(){
        return $this->hasOne(Coordinador::class);
    }
    
    // Relacion con programa (1:m)

    public function programas(){
        return $this->hasMany(Programa::class, 'id');
    }
}
