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

/*MODULO DE TRABAJADORES --HANS--*/
Route::PATCH('seguridad/usuario/editPersona/{idPersona}','UsuarioController@updatePersona'); 
Route::PATCH('seguridad/usuario/editUsuario/{idUsuario}','UsuarioController@updateUsuario');
Route::resource('seguridad/usuario','UsuarioController');




Route::resource('seguridad/HistorialClinico','HistorialClinicoController');
//Route::get('Sesiones/asistencia/{idAsistencia}/', 'ListarSesionesController@');
//Route::get('Sesiones/asistencia/{idAsistencia}/', 'ListarSesionesController@');


/*MODULO DE REPORTE --HANS--*/
Route::GET('reporte/familia','ReporteController@famindex');
Route::resource('reporte','ReporteController');


////////////////////////////////////////////

  });


// Operario


    Route::group(['middleware' =>['auth','is_operario']], function (){
 
    Route::resource('/home', 'HomeController');

});


 /*PERMISOS PARA TODOS*/



/*MODULO DE ASISTENCIA DE FAMILIA --HANS--*/

Route::POST('sesiones/asistencia/crearFecha','SesionesController@crearFecha');
Route::POST('sesiones/asistencia/crearSesiones','SesionesController@crearSesiones');
Route::POST('sesiones/asistencia/RegAsis','SesionesController@RegAsis');
Route::PATCH('sesiones/asistencia/ReRegAsis/{idAsistencia}','SesionesController@ReRegAsis');
Route::PATCH('sesiones/asistencia/EditAsis/{idAsistencia}','SesionesController@EditAsis');
Route::resource('sesiones/asistencia','SesionesController');

/*MODULO DE EVALUACION --DIEGO - DEYVIS - PACHECO--*/
 Route::resource('evaluacion/','EvaluacionController');






Route::POST('Familia/store','FamiliaController@store');
Route::resource('seguridad/UserSafety','ProfileController');


 /*Route::resource('/ListarEvaluacion', 'EvaluacionController');*/
 Route::resource('/Evaluar','EvaluarController');
