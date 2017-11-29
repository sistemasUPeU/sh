<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Historial_Examen extends Model
{
   protected $table='historial_examen';
   protected $primaryKey='idHistorial_Examen';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Fecha_Examen',
      'Examen_idExamen',
      'Paciente_idPaciente',
      
   ];

   protected $guarded =[


   ];
}