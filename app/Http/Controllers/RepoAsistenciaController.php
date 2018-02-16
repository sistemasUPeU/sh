<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;
use sisHospital\Familia;
use sisHospital\Http\Requests;
use DB;
class RepoAsistenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_director');
    } 


   
 public function index(Request $request)
    {
        if ($request)
        {   
          $query=trim($request->get('searchText'));
          $familias=DB::table('familia')
          ->where('Nom_fam','LIKE','%'.$query.'%')
          ->orwhere('Codigo_fam','LIKE','%'.$query.'%')
            ->orderBy('idFamilia','desc')
            ->paginate(7);
            return view('reporte.asistencia.index',["familias"=>$familias,"searchText"=>$query]);
        }
    }


}
