<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
   protected $table='asistencia';
   protected $primaryKey='idAsistencia';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Estado_asistencia',
      'Familia_idFamilia',
      'Fecha_idFecha',
      
   ];

   protected $guarded =[


   ];
}