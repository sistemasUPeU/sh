<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Resultado_Evaluacion extends Model
{
   protected $table='resultado_evaluacion';
   protected $primaryKey='idResultado_Evaluacion';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Estado_Eval',
      'Abandono',
      'Familia_idFamilia',
      'Evaluacion_idEvaluacion',
      'Abandono_idAbandono',
      
   ];

   protected $guarded =[


   ];
}