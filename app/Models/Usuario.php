<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'usuarios';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'password',
    ];

    // Ocultar campos sensibles al serializar el modelo
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Mutador para encriptar automáticamente la contraseña
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
