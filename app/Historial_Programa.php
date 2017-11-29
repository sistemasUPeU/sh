<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Historial_Programa extends Model
{
   protected $table='historial_programa';
   protected $primaryKey='idHistorial_Programa';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Programa_idPrograma',
      'Usuario_idUsuario',
      
   ];

   protected $guarded =[


   ];
}