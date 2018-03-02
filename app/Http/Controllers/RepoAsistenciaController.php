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
        
            return view('reporte.asistencia.index');
        
    }


}
