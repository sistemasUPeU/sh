<?php

namespace sisHospital\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Response;
use sisHospital\http\Requests\EditPeopleFormRequest;
use sisHospital\Persona;
use Validator;

class ProfileController extends Controller
{

    public function updatePassword(Request $request)
    {
       $oldPassword = $request->input('oldPassword');
       $newPassword = $request->input('newPassword');

        if (!Hash::check($oldPassword, Auth::User()->password)) {
            return back()->with('msg','Ups!! Contraseña no cambiada. Ingrese Correctamente su contraseña actual...');  //when user enter wrong password as current password

        } else {
            $request->user()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
            return back()->with('msg','Tu contraseña se actulizo correctamente...');
        }
        // echo 'here update query for password';
    }

    public function index(Request $request)
    {
        $id_tra = Auth::user()->Persona_idPersona;
        $trabajadores = DB::table('persona as p')
            ->join('usuario as u', 'p.idPersona', '=', 'u.Persona_idPersona')
            ->join('distrito as d', 'p.Distrito_idDistrito', '=', 'd.idDistrito')
            ->join('rol as r', 'u.Rol_idRol', '=', 'r.idRol')
            ->select('p.idPersona', 'p.Nom_per', 'p.Apel_pater', 'p.Apel_mat', 'p.Telefono', 'p.DNI', 'p.Fecha_nac', 'p.Sexo', 'r.Nom_rol', 'p.Direccion', 'u.Nom_user', 'u.Estado_user', 'd.Nom_Dist', 'u.idUsuario')
            ->where('p.idPersona', '=', $id_tra)
            ->first();
        $roles = DB::table('rol')->get();
        $distritos = DB::table('distrito')->get();
        return view('seguridad.UserSafety.profile', ["trabajadores" => $trabajadores, "roles" => $roles, "distritos" => $distritos]);
    }

    public function updatePeople(EditPeopleFormRequest $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->Apel_pater = $request->get('Apel_pater');
        $persona->Apel_mat = $request->get('Apel_mat');
        $persona->Nom_per = $request->get('Nom_per');
        $persona->DNI = $request->get('DNI');
        $persona->Fecha_nac = $request->get('Fecha_nac');
        $persona->Sexo = $request->get('Sexo');
        $persona->Distrito_idDistrito = $request->get('Distrito_idDistrito');
        $persona->Direccion = $request->get('Direccion');
        $persona->Telefono = $request->get('Telefono');
        $persona->update();
        return Redirect::to('seguridad/UserSafety/');
    }


}

