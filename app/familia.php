<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class familia extends Model
{
    protected $table='familia';
    protected $primarykey='idFamilia';

    public $timestamps=false;

    protected $fillable = [
      'Codigo_fam',
      'Nom_fam',
      'Respons_fam',
      'Tipo_Familia_idTipo_Familia',
      'Modo_Captacion_idModo_Captacion',
      'Programa_idPrograma',
      'Madre_idMadre',
     
   ];

   protected $guarded =[


   ];
}
