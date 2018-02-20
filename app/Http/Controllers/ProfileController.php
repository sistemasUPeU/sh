<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;

use sisHospital\Http\Requests;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('seguridad.UserSafety.Profile');
    }
}

