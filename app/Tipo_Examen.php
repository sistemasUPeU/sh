<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Tipo_Examen extends Model
{
   protected $table='tipo_examen';
   protected $primaryKey='idTipo_Examen';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Tipo_Exa',
      
   ];

   protected $guarded =[


   ];
}