@extends ('layouts.app')

@section('main-content')
    
<div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
      <h3>Informacion del Trabajador {{$trabajadores->Nom_per.' '.$trabajadores->Apel_pater.' '.$trabajadores->Apel_mat}}</h3>
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif
</div>
 </div>

<div class="row form-group">
<div class="col-lg-11 p-3 mb-2 bg-primary text-white">DATOS GENERALES</div>
</div>




<div class="row">
  <div  class="col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Nombre</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group" hidden value="{{$trabajadores->idPersona}}" disabled>
                  <input type="text" class="form-group"  value="{{$trabajadores->Nom_per}}" disabled>
                </div>
                </div>
           </div>

          <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Apellido Paterno</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group" value="{{$trabajadores->Apel_pater}}" disabled>
                </div>
                </div>
           </div>

           <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Apellido Materno</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group"  value="{{$trabajadores->Apel_mat}}" disabled>
                </div>
                </div>
           </div>
           
           <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Telefono</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group" value="{{$trabajadores->Telefono}}" disabled>
                </div>
                </div>
           </div>

           <div  class="col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">DNI</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group" value="{{$trabajadores->DNI}}" disabled>
                </div>
                </div>
           </div>

          <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Fecha de Nacimiento A-M-D</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group"  value="{{$trabajadores->Fecha_nac}}" disabled>
                </div>
                </div>
           </div>

           <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Sexo</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group"  value="{{$trabajadores->Sexo}}" disabled>
                </div>
                </div>
           </div>

           <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Distrito</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group" value="{{$trabajadores->Nom_Dist}}" disabled>
                </div>
                </div>
           </div>

           <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Direccion</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group" value="{{$trabajadores->Direccion}}" disabled>
                </div>
                </div>
           </div>



          <div class="form-group">
                <a href="{{URL::action('UsuarioController@editPersona',$trabajadores->idPersona)}}"><button class="btn btn-info">Editar Persona</button></a>
          </div>
      </div>






<div class="row form-group">
<div class="col-lg-11  p-3 mb-2 bg-primary text-white">DATOS DEL USUARIO</div>
</div>





<div class="row">
              
  
           <div  class="col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Nombre de Usuario</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group"  value="{{$trabajadores->Nom_user}}" disabled>
                </div>
                </div>
           </div>


           <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Estado del Usuario</label>
                  <div class="col-md-12">
                  
                    <?php if ($trabajadores->Estado_user == '1'): ?>
                    <input type="text" class="form-group"  value="Activo" disabled> 
                    <?php else: ?>
                    <input type="text" class="form-group"  value="Desactivo" disabled>  
                    <?php endif ?>
                 </div>
                </div>
           </div>

           <div  class="col-lg-4 col-sm-4 col-md-4 col-xs-12 form-group">
                 <div class="form-group">
                  <label for="proveedor" class="col-md-12 control-label">Rol del Usuario</label>
                  <div class="col-md-12">
                  <input type="text" class="form-group"  value="{{$trabajadores->Nom_rol}}" disabled>
                </div>
                </div>
           </div>


          <div class="form-group">
               <a href="{{URL::action('UsuarioController@editUsuario',$trabajadores->idUsuario)}}"><button class="btn btn-info">Editar Usuario</button></a>
          </div>
</div>

 

</div>
@endsection
