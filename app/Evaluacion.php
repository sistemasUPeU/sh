<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
   protected $table='evaluacion';
   protected $primaryKey='idEvaluacion';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Eval_Asis',
      'Eval_Niño_Vac',
      'Eval_Niño_SinAne',
      'Eval_CPN',
      'Eval_Signos_Alarma',
      'Eval_Plan_fam',
      'Eval_Usa_Plan_fam',
      'Eval_Fam_Plan',
      'Eval_Activ_Comun',
      'Eval_Norm_Conv',
      'Eval_Valores',
      'Eval_Pract_Salud',
      'Eval_Acude_Hosp',
      'Eval_Viv_Ordena',
      'Eval_Arbol',
      'Eval_Depo_Agua',
   ];

   protected $guarded =[


   ];
}