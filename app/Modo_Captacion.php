<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Modo_Captacion extends Model
{
   protected $table='modo_captacion';
   protected $primaryKey='idModo_Captacion';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Modo_Capt',
      
   ];

   protected $guarded =[


   ];
}