<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    use HasFactory;


    // Relacion con coordinacion (1:1)
    
     public function coordinacions(){
        return $this->belongsTo(Coordinacion::class, 'id_coordinacion');
    }

    // Relacion con reportes (1:m)
    
    public function reportes(){
        return $this->hasMany(Reporte::class, 'id');
    }
}
