<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;
use sisHospital\Http\Requests;
use sisHospital\Sesiones;
use sisHospital\Asistencia;
use sisHospital\Fecha;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use sisHospital\http\Requests\FechaSesionesFormRequest;
use sisHospital\http\Requests\SesionesFormRequest;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class SesionesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function index(Request $request)
    {
         if ($request)
        {   

          $sesiones=DB::table('sesiones as s')
          ->join('fecha as f','s.idSesiones','=','f.Sesiones_idSesiones')
          ->select('s.idSesiones','s.Tipo_Sesiones_idTipo_Sesiones','s.Nom_sesion','f.idFecha','f.Fecha','f.Sesiones_idSesiones')
          ->get();

           $nombresesion=DB::table('sesiones')->get();
           $tipo=DB::table('tipo_sesiones')->get();

            return view('sesiones.asistencia.index',["sesiones"=>$sesiones,"nombresesion"=>$nombresesion,"tipo"=>$tipo]);
        }     
    }

public function crearFecha (FechaSesionesFormRequest $request)
    {
      try{
    
          DB::beginTransaction();

          $fecha= new Fecha;
          $fecha->Sesiones_idSesiones=$request->get('Sesiones_idSesiones'); 
          $fecha->Fecha=$request->get('Fecha');   
          $fecha->save();
          
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
        return Redirect::to('sesiones/asistencia');
    }

public function crearSesiones (SesionesFormRequest $request)
    {
      try{
    
          DB::beginTransaction();

          $sesiones= new Sesiones;
          $sesiones->Tipo_Sesiones_idTipo_Sesiones=$request->get('Tipo_Sesiones_idTipo_Sesiones'); 
          $sesiones->Nom_sesion=$request->get('Nom_sesion');   
          $sesiones->save();
          
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
        return Redirect::to('sesiones/asistencia');
    }

   public function show(Request $request ,$id){

   if ($request) 
   {     
$query=trim($request->get('searchText'));
$auditoria=DB::table('familia as fa')        
->where('fa.Tipo_Familia_idTipo_Familia','!=','4')
->where('fa.Nom_fam','LIKE','%'.$query.'%')
->paginate(7);
}

$asistencia=DB::table('asistencia as asiss')
->join('fecha as fe','asiss.Fecha_idFecha','=','fe.idFecha')
->where('fe.idFecha','=',$id)
->get();


$fechas=DB::table('fecha')
->where('idFecha','=',$id)
->first();
  

          return view("sesiones.asistencia.show",["auditoria"=>$auditoria,"asistencia"=>$asistencia,"fechas"=>$fechas,"searchText"=>$query]);
        
    }

    public function ReRegAsis(Request $request,$id){

       $asistencia=Asistencia::findOrFail($id); 
       $asistencia->Estado_asistencia='1';
       $asistencia->update();
       return Redirect::to('sesiones/asistencia/'.$asistencia->Fecha_idFecha);

    }


    public function EditAsis(Request $request,$id){
       $asistencia=Asistencia::findOrFail($id); 
       $asistencia->Estado_asistencia=$request->get('Estado_asistencia');
       $asistencia->update();
       return Redirect::to('sesiones/asistencia/'.$asistencia->Fecha_idFecha);

      
    }

    public function RegAsis(Request $request){
    
    try{
    
          DB::beginTransaction();
          $asistencia=new Asistencia;
          $asistencia->Estado_asistencia='1';
          $asistencia->Familia_idFamilia=$request->get('Familia_idFamilia');
       $asistencia->Fecha_idFecha=$request->get('Fecha_idFecha');
          $asistencia->save();
          
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
           return Redirect::to('sesiones/asistencia/'.$asistencia->Fecha_idFecha);
    }
   

}
