<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;
use sisHospital\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use Illuminate\Support\Collection;
use sisHospital\nino;
use sisHospital\control_nutricional;
use sisHospital\madre;

class ninoController extends Controller
{
    public function index( Request $request)
    {
        return view('evaluacion/generalinfon');
    }

    public function show ($id){


    	$res=DB::table('madre as m')
    	->join('nino as n','n.Madre_idMadre','=','m.idMadre')
        ->join('control_nutricional as cn','cn.Nino_idNino','=','n.idNino')
    	->select('n.idNino','m.Madre_nombre','n.Nino_HC','n.Nino_DNI','n.Nino_nombre','n.Nino_fecha','n.Nino_nombre','n.Nino_sexo','n.Nino_apelpa','cn.Edad','cn.Peso','n.Nino_apelma')
    	->where('m.idMadre','=',$id)
    	->get(0);


    	return view("evaluacion.generalinfon",["res"=>$res]);
    }
}
