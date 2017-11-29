<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Problemas_Salud extends Model
{
   protected $table='problemas_salud';
   protected $primaryKey='idProblemas_salud';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Enfermedad_idEnfermedad',
      'Fecha_Atencion',
      'Atendido',
      'Hospital_idHospital',
      'Paciente_idPaciente',
      
   ];

   protected $guarded =[


   ];
}