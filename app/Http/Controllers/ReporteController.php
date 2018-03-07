<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;
use sisHospital\Familia;
use sisHospital\Http\Requests;
use DB;
class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_director');
    } 


   
 public function index(Request $request)
    {
        
            return view('reporte.index');
        
    }
   

public function famindex(Request $request)
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


            return view('reporte.familia.index',["familias"=>$familias,"searchText"=>$query,"ninos"=>$ninos]);
        }

        
    }


    public function show($id)
    {
            $sesiones=DB::table('sesiones')->get();  
            return view('reporte.familia.reporte',["sesiones"=>$sesiones]);
        
    }




}
