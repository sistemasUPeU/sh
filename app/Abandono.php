<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Abandono extends Model
{
   protected $table='abandono';
   protected $primaryKey='idAbandono';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Causa_Aband',
      
   ];

   protected $guarded =[


   ];
}