<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;

use sisHospital\Http\Requests;

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

    public function index()
    {
         return view('sesiones.asistencia.index');
    }

}
