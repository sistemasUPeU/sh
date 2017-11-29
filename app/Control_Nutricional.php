<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Control_Nutricional extends Model
{
   protected $table='control_nutricional';
   protected $primaryKey='idControl_Nutricional';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Fecha_CN',
      'Edad',
      'Peso',
      'Talla',
      'HB_HTO',
      'Observacion',
      'Paciente_idPaciente',
      
   ];

   protected $guarded =[


   ];
}