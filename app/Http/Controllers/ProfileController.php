<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;

use sisHospital\Http\Requests;

class ProfileController extends Controller
{

    public function updatePassword(Request $request)
    {
       $oldPassword = $request->input('oldPassword');
       $newPassword = $request->input('newPassword');

        if (!Hash::check($oldPassword, Auth::User()->password)) {
            return back()->with('msg','Ups!! Contraseña no cambiada. Ingrese Correctamente su contraseña actual...');

        } else {
            $request->user()->fill(['password' => Hash::make($newPassword)])->save();
            return back()->with('msg','Tu contraseña se actulizo correctamente...');
        }
    }

    public function index(Request $request)
    {
        return view('seguridad.UserSafety.Profile');
    }
}

