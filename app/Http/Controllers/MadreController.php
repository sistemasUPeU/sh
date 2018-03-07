<?php

namespace sisHospital\Http\Controllers;

use Illuminate\Http\Request;
use sisHospital\Http\Requests;
use sisHospital\madre;
use sisHospital\Cpn;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use sisHospital\http\Requests\MadreRequest;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;


class MadreController extends Controller

{
    public function show($id)
    {
        $cp=DB::table('madre as m')
            ->join('cpn as c','c.Madre_idMadre','=','m.idMadre')
            ->select('c.Fecha_CPN','c.Responsable_CPN','c.Madre_idMadre','m.idMadre','c.idCPN')
            ->where('c.Madre_idMadre','=',$id)
            ->get();

        return view("evaluacion.madre.index",["cp"=>$cp]);

    }

    public function updatecpn(MadreRequest $request, $id)
    {
        $cpn=Cpn::findOrFail($id);
        $cpn->Fecha_CPN=$request->get('Fecha_CPN');
        $cpn->Responsable_CPN=$request->get('Responsable_CPN');
        $cpn->Madre_idMadre=$request->get('Madre_idMadre');
        $cpn->update();

        return Redirect::to('evaluacion/madre/'.$cpn->Madre_idMadre);
    }

    public function store(MadreRequest $request){

        try {

            DB::beginTransaction();
            $cpn=new Cpn;
            $cpn->Madre_idMadre=$request->get('Madre_idMadre');
            $cpn->Fecha_CPN=$request->get('Fecha_CPN');
            $cpn->Responsable_CPN=$request->get('Responsable_CPN');
            $cpn->save();
            DB::commit();

        } catch (Exception $e) {
            DB::rollback();

        }
        return Redirect::to('evaluacion/madre/index');
    }

    public function destroy($id){

        DB::table('cpn')->where('idCPN',$id)->delete();

        return Redirect::to('evaluacion/madre/index');

    }



}
