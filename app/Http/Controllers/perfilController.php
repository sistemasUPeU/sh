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


class perfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        
            
        if($request){
            $trabajadores=DB::table('persona as p')
        ->join('usuario as u','p.idPersona','=','u.Persona_idPersona')
        ->join('distrito as d','p.Distrito_idDistrito','=','d.idDistrito')
        ->join('rol as r','u.Rol_idRol','=','r.idRol')
        ->select('p.idPersona','p.Nom_per','p.Apel_pater','p.Apel_mat','p.Telefono','p.DNI','p.Fecha_nac','p.Sexo','r.Nom_rol','p.Direccion','u.Nom_user','u.Estado_user','d.Nom_Dist','u.idUsuario')
        ->where('p.idPersona','=',$id)
        ->first();
        
        $roles=DB::table('rol')->get();  
        $distritos=DB::table('distrito')->get();

          return view("perfil.index",["trabajadores"=>$trabajadores,"roles"=>$roles,"distritos"=>$distritos]);
        }
        

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
