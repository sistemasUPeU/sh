<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
   protected $table='departamento';
   protected $primaryKey='idDepartamento';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Nom_Depart',
      
   ];

   protected $guarded =[


   ];
}