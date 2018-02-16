<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class nino extends Model
{
     protected $table = 'nino';
     protected $primaryKey = 'idNino';
     public $timestamps=false;

      protected $fillable = [
      'Nino_HC',
      'Nino_DNI',
      'Nino_nombre',
      'Nino_fecha',
      'Nino_sexo',
      'Nino_apelma',
      'Nino_apelpa',
      'Madre_idMadre',
      
    ];

    protected $guarded =[


    ];
}
