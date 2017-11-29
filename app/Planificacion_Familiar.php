<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Planificacion_Familiar extends Model
{
   protected $table='planificacion_familiar';
   protected $primaryKey='idPlanificacion_Familiar';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Nom_Plan_Fam',
      'HC_Madre_idHC_Madre',
      
   ];

   protected $guarded =[


   ];
}