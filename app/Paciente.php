<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
   protected $table='paciente';
   protected $primaryKey='idPaciente';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Tipo_pac',
      'Num_HC',
      'Persona_idPersona',
      'Familia_idFamilia',
      
   ];

   protected $guarded =[


   ];
}