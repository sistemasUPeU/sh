<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Cpn extends Model
{
   protected $table='cpn';
   protected $primaryKey='idCPN';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Fecha_CPN',
      'Responsable_CPN',
      'Madre_idMadre',
      
   ];

   protected $guarded =[


   ];
}