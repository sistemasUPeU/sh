<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table='persona';
   protected $primaryKey='idPersona';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Apel_pater',
      'Apel_mat',
      'Nom_per',
      'DNI',
      'Fecha_nac',
      'Sexo',
      'Distrito_idDistrito',
      'Direccion',
      'Telefono',
   ];

   protected $guarded =[


   ];
}
