<?php
namespace sisHospital\Http\Controllers;
use Illuminate\Http\Request;
use sisHospital\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use Illuminate\Support\Collection;
use sisHospital\familia;
use sisHospital\HC_Madre;
use sisHospital\nino;
use sisHospital\madre;
class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        return view('Familia/cards');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request) 
        {
           /* $query=trim($request->get('searchText'));
          $personas=DB::table('persona as p')
          ->join('usuario as u','p.idPersona','=','u.Persona_idPersona')
          ->join('rol as r','u.Rol_idRol','=','r.idRol')
          ->join('distrito as d','p.Distrito_idDistrito','=','d.idDistrito')
          ->select('p.idPersona','p.Nom_per','p.Apel_pater','p.Apel_mat','p.Telefono','p.DNI','r.Nom_rol','u.Nom_user','u.Estado_user','d.Nom_Dist','u.idUsuario')
          ->where('u.Nom_user','LIKE','%'.$query.'%')
            ->orderBy('p.idPersona','desc')
            ->paginate(7);
            return view('seguridad.usuario.index',["personas"=>$personas,"searchText"=>$query]);*/
        }   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  {

      try{


          DB::beginTransaction();
          $madre = new madre;
          $madre->Madre_apel_pa=$request->get('Madre_apel_pa');
          $madre->Madre_apel_ma=$request->get('Madre_apel_ma');
          $madre->Madre_nombre=$request->get('Madre_nombre');
          $madre->Madre_DNI=$request->get('Madre_DNI');
          $madre->Madre_fecha=$request->get('Madre_fecha'); 
          $madre->Madre_direccion=$request->get('Madre_direccion');
          $madre->Madre_telf=$request->get('Madre_telf');
          $madre->distrito_idDistrito=$request->get('distrito_idDistrito');
          $madre->save();


          $familia = new familia;
          $familia->Codigo_fam=$request->get('Codigo_fam');
          $familia->Nom_fam=$request->get('Nom_fam');
          $familia->Respons_fam=$request->get('Respons_fam');
          $familia->Tipo_Familia_idTipo_Familia=$request->get('Tipo_Familia_idTipo_Familia');
          $familia->Modo_Captacion_idModo_Captacion=$request->get('Modo_Captacion_idModo_Captacion');
          $familia->Programa_idPrograma=2;
          $familia->Madre_idMadre=$madre->idMadre;
          $familia->save();


          $HC_Madre = NEW HC_Madre;
          $HC_Madre->Gestante_Inicio=$request->get('Gestante_Inicio');
          $HC_Madre->CPN_Antes=$request->get('CPN_Antes');
          $HC_Madre->Cantidad_CPN_Antes=$request->get('Cantidad_CPN_Antes');
          $HC_Madre->Papanicolau_Antes=$request->get('Papanicolau_Antes');
          $HC_Madre->Examen_Mamas_Antes=$request->get('Examen_Mamas_Antes');
          $HC_Madre->Vacuna_Antitetanica_Antes=$request->get('Vacuna_Antitetanica_Antes');
          $HC_Madre->Cantidad_Vacunas_Antitetanicas=$request->get('Cantidad_Vacunas_Antitetanicas');
          $HC_Madre->Planificacion_Familiar_idPlanificacion_Familiar=$request->get('Planificacion_Familiar_idPlanificacion_Familiar');
          $HC_Madre->Madre_idMadre=$madre->idMadre;
          $HC_Madre->save();


          $Nino_HC = $request->get('Nino_HC');
          $Nino_DNI = $request->get('Nino_DNI');
          $Nino_sexo = $request->get('Nino_sexo');
          $Nino_apelpa = $request->get('Nino_apelpa');
          $Nino_apelma = $request->get('Nino_apelma');
          $Nino_nombre = $request->get('Nino_nombre');
          $Nino_fecha = $request->get('Nino_fecha');

          $cont = 0;
          while ($cont < count($Nino_HC)) {
            $nino = new nino();
            $nino->Madre_idMadre = $madre->idMadre;
            $nino->Nino_HC = $Nino_HC[$cont];
            $nino->Nino_DNI = $Nino_DNI[$cont];
            $nino->Nino_sexo = $Nino_sexo[$cont];
            $nino->Nino_apelpa = $Nino_apelpa[$cont];
            $nino->Nino_apelma = $Nino_apelma[$cont];
            $nino->Nino_nombre = $Nino_nombre[$cont];
            $nino->Nino_fecha = $Nino_fecha[$cont];
            $nino->save();
            $cont = $cont+1;
          }
       
        
          DB::commit();

      }catch(\Exception $e)
     
      {
        DB::rollback();
        echo($e);
      }
      return view ('home');
     }
    public function show($id)
    {
        $family=DB::table('familia as f')
        ->join('madre as m','m.idMadre','=','f.Madre_idMadre')
        ->join('nino as n','m.idMadre','=','n.Madre_idMadre')
        ->select('f.Codigo_fam','f.Nom_fam','f.Respons_fam','f.Tipo_Familia_idTipo_Familia',
        'm.Madre_nombre','m.Madre_apel_pa','m.Madre_fecha','m.distrito_idDistrito',
        'n.Nino_nombre','n.Nino_apelpa','n.Nino_fecha','n.Nino_HC')
        ->where('f.idFamilia','=',$id)
        ->first();

        return view ("evaluacion.resultado",["family"=>$family]);
    }
  
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
      
    }
    
    public function destroy($id)
    {
        //
    }
    public  function  listarfamilia(){
        //
    }

}