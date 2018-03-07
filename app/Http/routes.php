<?php



   Route::get('/',function () {
       return view('welcome');
    });

Route::auth();




// Administrador


Route::group(['middleware' =>['auth','is_admin']], function (){



});


//JEFE

Route::group(['middleware' =>['auth','is_director']], function (){

//////////////////////////////////////////// !!!! MODULO DE JEFE - CREATE,STORE,SHOW,EDIT,DESTROY DE USUARIOS

 
Route::PATCH('seguridad/usuario/editPersona/{idPersona}','UsuarioController@updatePersona'); 
Route::PATCH('seguridad/usuario/editUsuario/{idUsuario}','UsuarioController@updateUsuario');

// SE DEBE DEJAR EL RESOURCE AL FINAL O PUEDE OCURRIR UN ERROR AL NO ENCONTRAR EL METODO *MUY IMPORTANTE*

Route::resource('seguridad/usuario','UsuarioController');
Route::resource('seguridad/HistorialClinico','HistorialClinicoController');
//Route::get('Sesiones/asistencia/{idAsistencia}/', 'ListarSesionesController@');
//Route::get('Sesiones/asistencia/{idAsistencia}/', 'ListarSesionesController@');
Route::resource('reporte/asistencia','RepoAsistenciaController');


////////////////////////////////////////////

  });


// Operario


    Route::group(['middleware' =>['auth','is_operario']], function (){
    Route::PATCH('evaluacion/resultado/{idFamilia}','FamiliaController@show');
    Route::PATCH('evaluacion/generalinfon/{idMadre}','ninoController@show');
    Route::resource('/home', 'HomeController');
    Route::resource('evaluacion/resultado','FamiliaController');
    Route::resource('evaluacion/generalinfon','ninoController');
    Route::resource('Familia','NuevaFamiliaController');
    Route::resource('/Carnet-Familiar','CarnetFammiliarController');
    Route::resource('/Carnet-General','CarnetFammiliarController');
});


 /*PERMISOS PARA TODOS*/

Route::POST('sesiones/asistencia/crearFecha','SesionesController@crearFecha');
Route::POST('sesiones/asistencia/crearSesiones','SesionesController@crearSesiones');
Route::POST('sesiones/asistencia/RegAsis','SesionesController@RegAsis');
Route::PATCH('sesiones/asistencia/ReRegAsis/{idAsistencia}','SesionesController@ReRegAsis');
Route::PATCH('sesiones/asistencia/EditAsis/{idAsistencia}','SesionesController@EditAsis');
Route::resource('sesiones/asistencia','SesionesController');
Route::POST('Familia/store','FamiliaController@store');

Route::resource('seguridad/UserSafety','ProfileController');


 /*Route::resource('/ListarEvaluacion', 'EvaluacionController');*/
 Route::resource('/Evaluar','EvaluarController');
 Route::resource('evaluacion/','EvaluacionController');
  /*lsitar madre*/

Route::PATCH('evaluacion/madre/cpn/{idCPN}','MadreController@updatecpn');
/*raro esto*/
Route::GET('evaluacion/madre/index/','MadreController@store');
Route::resource('evaluacion/madre','MadreController');


