<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
   protected $table='rol';
   protected $primaryKey='idRol';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
    
      'Nom_rol',
      
   ];

   protected $guarded =[


   ];
}