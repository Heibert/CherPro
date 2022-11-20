<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellido',
        'telefono',
        'email',
        'password',
        'password_confirmation'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //incriptación 
    public function setPasswordAttribute($password){

        $this->attributes ['password'] = bcrypt($password);
    }

    public function aprendiz(){
        return $this->hasOne(Aprendiz::class);
    }

    public function instructor(){
        return $this->hasOne(Instructor::class);
    } 

    public function coordinador(){
        return $this->hasOne(Coordinador::class);
    }

    public function admin(){
        return $this->hasOne(Administrador::class);
    } 
}