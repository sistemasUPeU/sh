<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class madre extends Model
{
    protected $table='madre';
    protected $primaryKey='idMadre';
    public $timestamps=false;

    protected $fillable = [
       'Madre_apel_pa',
       'Madre_apel_ma',
       'Madre_nombre',
       'Madre_DNI',
       'Madre_fecha',
       'Madre_direccion',
       'Madre_telf',
       'distrito_idDistrito',
    ];

    protected $guarded = [

    ];
}
