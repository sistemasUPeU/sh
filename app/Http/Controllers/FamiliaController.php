<?php
namespace sisHospital\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use sisHospital\Http\Requests;
class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $familia=DB::table('familia')
                ->where('Nom_fam','LIKE','%', $query,'%')
                ->orderBy('idFamilia','desc')
                ->paginate(6);
            return view('Familia.Listar-Familia',["familia"=>$familia,"searchText"=>$query]);
        }
        //return view('Familia/Listar-Familia');
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
        //
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
    public  function  listarfamilia(){
        //
    }
}