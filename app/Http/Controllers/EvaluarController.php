<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;

use sisHospital\Http\Requests;
use sisHospital\Programa;
use sisHospital\Familia;

use sisHospital\Tipo_Familia;
use sisHospital\Modo_Captacion;
use sisHospital\Evaluacion;

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
          ->join('evaluacion as e','e.Familia_idFamilia','=','f.idFamilia')
          ->select('f.Nom_fam','f.Respons_fam', 'e.idEvaluacion', 'f.Tipo_Familia_idTipo_Familia','e.Estado_Eval')
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