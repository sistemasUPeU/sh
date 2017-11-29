<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class familia extends Model
{
    //
    protected  $table='carnetfamiliar';
    protected $touches='idCarnetFamiliar';

    public $timestamps =false;

    protected $fillable = [
        'num_familiabeneficiada',
        'familia',
        'ape_paterno',
        'nombres',
        'direccion',
        'historial_cli',
        'dni',
        'estado',
        'Hijo_idhijo',
        'Madre_idMadre',
        'Sesiones_idSesiones'
    ];

}
