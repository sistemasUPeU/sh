<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
   protected $table='fecha';
   protected $primaryKey='idFecha';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Fecha',
      'Sesiones_idSesiones',
  
   ];

   protected $guarded =[


   ];
}