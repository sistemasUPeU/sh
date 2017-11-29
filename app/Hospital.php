<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
   protected $table='hospital';
   protected $primaryKey='idHospital';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Nom_hospital',
     
   ];

   protected $guarded =[


   ];
}