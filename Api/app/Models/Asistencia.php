<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aprendiz;

class Asistencia extends Model
{
    use HasFactory;
    public function aprendiz(){
        return $this->belongsTo('App\Aprendiz','id');
    }
}
