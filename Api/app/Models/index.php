<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class index extends Model
{
    use HasFactory;

    public function programa(){
        return $this->hasMany(Programa::class, 'nombrePrograma');
    }

    public function trimestre(){
        return $this->hasMany(Trimestre::class, 'id');
    }
}
