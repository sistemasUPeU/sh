<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class HC_Madre extends Model
{
   protected $table='hc_madre';
   protected $primaryKey='idHC_Madre';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Gestante_Inicio',
      'CPN_Antes',
      'Cantidad_CPN_Antes',
      'Papanicolau_Antes',
      'Examen_Mamas_Antes',
      'Vacuna_Antitetanica_Antes',
      'Cantidad_Vacunas_Antitetanicas',
      'Paciente_idPaciente',
      
   ];

   protected $guarded =[


   ];
}