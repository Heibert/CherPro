<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;

     // Relacion con tematica (m:m)
    
     public function tematicas(){
        return $this->belongsToMany(Tematica::class, 'tematica:trimestre');
    }
}
