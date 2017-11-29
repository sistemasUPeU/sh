@extends ('layouts.app')
@section('main-content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Usuario: {{ $usuario->Nom_user }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif


           
            {!!Form::model($usuario,['method'=>'PATCH','route'=>['seguridad.usuario.updateUsuario',$usuario->idUsuario]])!!}
             
            
            {{Form::token()}}


                        <div class="form-group{{ $errors->has('Nom_user') ? ' has-error' : '' }}">
                            <label for="Nom_user" class="col-md-4 control-label">Nombre de Usuario</label>

                            <div class="col-md-6">
                                <input id="Nom_user" type="text" class="form-control" name="Nom_user" value="{{$usuario->Nom_user}}">
                            </div>
                        </div>

                     <div class="form-group">
                     <label for="Estado_user" class="col-md-4 control-label">Estado</label>
                     <div class="col-md-6">
                      
                     <select name="Estado_user" class="form-control"> 
                          
                         <?php if ($usuario->Estado_user == 1): ?>
                          <option value="1" selected >Activo</option>
                          <option value="0">Desactivo</option>  

                          <?php elseif ($usuario->Estado_user == 0): ?>
                           <option value="0" selected >Desactivo</option>
                           <option value="1">Activo</option>

                          <?php endif ?> 
                    </select>
                    </div>

                   </div>
           



                    <div class="form-group">
                     <label for="Rol_idRol" class="col-md-4 control-label">Rol del Trabajador</label>
                     <div class="col-md-6">
                      
                     <select name="Rol_idRol" class="form-control"> 
                      
                         @foreach($roles as $r)
                         <option value="{{$r->idRol}}">{{$r->Nom_rol}}</option>
                         @endforeach

                    </select>
                    </div>
                    </div>
                 

               <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}
           
		</div>
	</div>
@endsection	