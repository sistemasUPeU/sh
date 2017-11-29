<?php

namespace sisHospital;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
   protected $table='usuario';
   protected $primaryKey='idUsuario';


    protected $fillable = [
        'Nom_user',
        'Estado_user',
        'password',
        'Rol_idRol',
        'Persona_idPersona',
        'created_at',
        'updated_at',
        'Estado_user',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];
}
