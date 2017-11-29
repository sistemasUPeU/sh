<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Exaen extends Model
{
   protected $table='examen';
   protected $primaryKey='idExamen';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Nom_Exa',
      'Tipo_Examen_idTipoExamen',
      
   ];

   protected $guarded =[


   ];
}