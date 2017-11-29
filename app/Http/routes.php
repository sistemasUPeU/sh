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

Route::get('seguridad/usuario/{idPersona}/editPersona','UsuarioController@editPersona');
Route::get('seguridad/usuario/{idUsuario}/editUsuario','UsuarioController@editUsuario');
Route::PATCH('seguridad/usuario/editPersona/{idPersona}','UsuarioController@updatePersona')->name('seguridad.usuario.updatePersona');
Route::PATCH('seguridad/usuario/editUsuario/{idUsuario}','UsuarioController@updateUsuario')->name('seguridad.usuario.updateUsuario');
// SE DEBE DEJAR EL RESOURCE AL FINAL O PUEDE OCURRIR UN ERROR AL NO ENCONTRAR EL METODO *MUY IMPORTANTE*

Route::resource('seguridad/usuario','UsuarioController');

////////////////////////////////////////////

  });


// Operario


    Route::group(['middleware' =>['auth','is_operario']], function (){
 
    Route::resource('/home', 'HomeController');
    Route::resource('/Listar-Familia','FamiliaController');
    Route::resource('Familia','NuevaFamiliaController');
    Route::resource('/Carnet-Familiar','CarnetFammiliarController');
    Route::resource('/Carnet-General','CarnetFammiliarController');
  
});

 