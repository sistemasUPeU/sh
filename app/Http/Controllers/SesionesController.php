<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;
use sisHospital\Http\Requests;
use sisHospital\Sesiones;
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
        $this->middleware('is_admin');
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

   public function show($id){
    
/// aqui esta mal todo

        $auditoria=DB::table('persona as p')
        ->join('usuario as u','p.idPersona','=','u.Persona_idPersona')
        ->join('distrito as d','p.Distrito_idDistrito','=','d.idDistrito')
        ->join('rol as r','u.Rol_idRol','=','r.idRol')
        ->select('p.idPersona','p.Nom_per','p.Apel_pater','p.Apel_mat','p.Telefono','p.DNI','p.Fecha_nac','p.Sexo','r.Nom_rol','p.Direccion','u.Nom_user','u.Estado_user','d.Nom_Dist','u.idUsuario')
        ->where('p.idPersona','=',$id)
        ->first();
        
        $roles=DB::table('fecha')->get();  
        $distritos=DB::table('distrito')->get();

          return view("sesiones.asistencia.show",["trabajadores"=>$trabajadores,"roles"=>$roles,"distritos"=>$distritos]);
    }




}
