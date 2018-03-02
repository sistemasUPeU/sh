<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;

use sisHospital\Http\Requests;
use DB;
class EvaluacionController extends Controller
{
   public function index(Request $request)
    {
       if ($request)
        {   
          $query=trim($request->get('searchText'));
          $familias=DB::table('familia as fa')
          ->join('madre as ma','fa.Madre_idMadre','=','ma.idMadre')
          ->select('fa.idFamilia','fa.Codigo_fam','fa.Nom_fam','ma.idMadre','ma.Madre_nombre','ma.Madre_apel_ma','ma.Madre_apel_pa','ma.Madre_DNI')
          ->where('fa.Nom_fam','LIKE','%'.$query.'%')
          ->orwhere('ma.Madre_nombre','LIKE','%'.$query.'%')
          ->orwhere('ma.Madre_DNI','LIKE','%'.$query.'%')
          ->orwhere('fa.Codigo_fam','LIKE','%'.$query.'%')
            ->orderBy('fa.idFamilia','desc')
            ->paginate(7);

          $ninos=DB::table('nino')->get();  


            return view('evaluacion.index',["familias"=>$familias,"searchText"=>$query,"ninos"=>$ninos]);
        }

      
    }

}
