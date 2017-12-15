<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;

use sisHospital\Http\Requests;
use sisHospital\Programa;
use sisHospital\Familia;
use sisHospital\Abandono;
use sisHospital\Tipo_Familia;
use sisHospital\Modo_Captacion;
use sisHospital\Evaluacion;
use sisHospital\Resultado_Evaluacion;
use sisHospital\Http\EvaluarRequest;
use DB;
class EvaluarController extends Controller
{
	public function index(Request $request)
    {
        if ($request)
        {   
          $query=trim($request->get('searchText'));
          $evaluaciones=DB::table('familia as f')
          ->join('programa as p','f.Programa_idPrograma','=','p.idPrograma')
          ->join('modo_captacion as mp','f.Modo_Captacion_idModo_Captacion','=','mp.idModo_Captacion')
          ->join('tipo_familia as tf','f.Tipo_Familia_idTipo_Familia','=','tf.idTipo_Familia')
          ->join('resultado_evaluacion as re','f.idFamilia','=','re.Familia_idFamilia')
          ->join('abandono as a','a.idAbandono','=','re.Abandono_idAbandono')
          ->join('evaluacion as e','e.idEvaluacion','=','re.Evaluacion_idEvaluacion')
          ->select('f.Nom_fam','f.Respons_fam','tf.Estado','mp.Modo_Capt' ,'re.Estado_eval', 'e.idEvaluacion')
          ->where('f.Nom_fam','LIKE','%'.$query.'%')
            ->orderBy('f.Codigo_fam','desc')
            ->paginate(7);
            return view('Evaluar.evaluar',["evaluaciones"=>$evaluaciones,"searchText"=>$query]);
        }
    }
    public function create(){
    	return view('Evaluar.evaluar');
    }
    public function show($id){
    	return view('Evaluar.evaluar',['familia'=>Familia::findOrFail($id)]);
    }


}