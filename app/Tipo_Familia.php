<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Tipo_Familia extends Model
{
   protected $table='tipo_familia';
   protected $primaryKey='idTipo_Familia';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Estado',
      
   ];

   protected $guarded =[


   ];
}