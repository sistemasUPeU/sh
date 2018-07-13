<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;
use sisHospital\Http\Requests;
use sisHospital\Persona;
use sisHospital\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use sisHospital\http\Requests\UsuarioFormRequest;
use sisHospital\http\Requests\EditPersonaFormRequest;
use sisHospital\http\Requests\EditUsuarioFormRequest;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
 
 

/* HECHO POR HANS ( NO TOCAR )*/




class UsuarioController extends Controller
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
          $personas=DB::table('persona as p')
          ->join('usuario as u','p.idPersona','=','u.Persona_idPersona')
          ->join('rol as r','u.Rol_idRol','=','r.idRol')
          ->join('distrito as d','p.Distrito_idDistrito','=','d.idDistrito')
          ->select('p.idPersona','p.Nom_per','p.Apel_pater','p.Apel_mat','p.Telefono','p.DNI','r.Nom_rol','u.Nom_user','u.Estado_user','d.Nom_Dist','u.idUsuario')
          ->where('u.Nom_user','LIKE','%'.$query.'%')
          ->orwhere('p.DNI','LIKE','%'.$query.'%')
            ->orderBy('p.idPersona','desc')
            ->paginate(5);
            return view('seguridad.usuario.index',["personas"=>$personas,"searchText"=>$query]);
        }
    }






    public function create()
    {
        
        $roles=DB::table('rol')->get();
        $distritos=DB::table('distrito')->get();

         return view("seguridad.usuario.create",["roles"=>$roles,"distritos"=>$distritos]);
    }

    public function store (UsuarioFormRequest $request)
    {
      try{
    
          DB::beginTransaction();
          $persona=new Persona;
          $persona->Apel_pater=$request->get('Apel_pater');
          $persona->Apel_mat=$request->get('Apel_mat');
          $persona->Nom_per=$request->get('Nom_per');
          $persona->DNI=$request->get('DNI');
          $persona->Fecha_nac=$request->get('Fecha_nac');
          $persona->Sexo=$request->get('Sexo');
          $persona->Distrito_idDistrito=$request->get('Distrito_idDistrito');
          $persona->Direccion=$request->get('Direccion');
          $persona->Telefono=$request->get('Telefono');
          $persona->save();
        
          $usuario= new User;
          $usuario->Persona_idPersona = $persona->idPersona;
          $usuario->Nom_user=$request->get('Nom_user');
          $usuario->password=bcrypt($request->get('password'));
          $usuario->Estado_user='1';
          $usuario->Rol_idRol=$request->get('Rol_idRol');
          $usuario->save();
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
        return Redirect::to('seguridad/usuario')->with('msg','La cuenta se creo correctamente...');
    }




    public function show($id){
    
        $trabajadores=DB::table('persona as p')
        ->join('usuario as u','p.idPersona','=','u.Persona_idPersona')
        ->join('distrito as d','p.Distrito_idDistrito','=','d.idDistrito')
        ->join('rol as r','u.Rol_idRol','=','r.idRol')
        ->select('p.idPersona','p.Nom_per','p.Apel_pater','p.Apel_mat','p.Telefono','p.DNI','p.Fecha_nac','p.Sexo','r.Nom_rol','p.Direccion','u.Nom_user','u.Estado_user','d.Nom_Dist','u.idUsuario')
        ->where('p.idPersona','=',$id)
        ->first();
        
        $roles=DB::table('rol')->get();  
        $distritos=DB::table('distrito')->get();

          return view("seguridad.usuario.show",["trabajadores"=>$trabajadores,"roles"=>$roles,"distritos"=>$distritos]);
    }

 
    public function updateUsuario(EditUsuarioFormRequest $request,$id)
    {          
       $usuario=User::findOrFail($id); 
       $usuario->Nom_user=$request->get('Nom_user');
       $usuario->Estado_user=$request->get('Estado_user');
       $usuario->Rol_idRol=$request->get('Rol_idRol');
       $usuario->update();
       return Redirect::to('seguridad/usuario/'.$usuario->Persona_idPersona);
    }




    public function updatePersona(EditPersonaFormRequest $request,$id)
    {          
        $persona=Persona::findOrFail($id);  
        $persona->Apel_pater=$request->get('Apel_pater');
        $persona->Apel_mat=$request->get('Apel_mat');
        $persona->Nom_per=$request->get('Nom_per');
        $persona->DNI=$request->get('DNI');
        $persona->Fecha_nac=$request->get('Fecha_nac');
        $persona->Sexo=$request->get('Sexo');
        $persona->Distrito_idDistrito=$request->get('Distrito_idDistrito');
        $persona->Direccion=$request->get('Direccion');
        $persona->Telefono=$request->get('Telefono');
        $persona->update();
        return Redirect::to('seguridad/usuario/'.$id);
    }

 
}
