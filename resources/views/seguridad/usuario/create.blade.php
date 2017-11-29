@extends ('layouts.app')

@section('main-content')
    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Usuario</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

            {!!Form::open(array('url'=>'seguridad/usuario','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}


                        <div class="form-group{{ $errors->has('Nom_per') ? ' has-error' : '' }}">
                            <label for="Nom_per" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="Nom_per" type="text" class="form-control" name="Nom_per">

                                @if ($errors->has('Nom_per'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nom_per') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Apel_pater') ? ' has-error' : '' }}">
                            <label for="Apel_pater" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="Apel_pater" type="text" class="form-control" name="Apel_pater">

                                @if ($errors->has('Apel_pater'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Apel_pater') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Apel_mat') ? ' has-error' : '' }}">
                            <label for="Apel_mat" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="Apel_mat" type="text" class="form-control" name="Apel_mat">

                                @if ($errors->has('Apel_mat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Apel_mat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('DNI') ? ' has-error' : '' }}">
                            <label for="DNI" class="col-md-4 control-label">N° DNI</label>

                            <div class="col-md-6">
                                <input id="DNI" type="text" class="form-control" name="DNI">

                                @if ($errors->has('DNI'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DNI') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
   
   
                          <div class="form-group{{ $errors->has('Fecha_nac') ? ' has-error' : '' }}">
                            <label for="Fecha_nac" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="Fecha_nac" type="date" class="form-control" name="Fecha_nac">

                                @if ($errors->has('Fecha_nac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Fecha_nac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                     <div class="form-group">
                     <label for="Sexo" class="col-md-4 control-label">Sexo</label>
                     <div class="col-md-6">
                      
                     <select name="Sexo" class="form-control"> 
                      
                         <option value="Masculino">Masculino</option>
                         <option value="Femenino">Femenino</option> 
                    </select>
                    </div>

                   </div>
           

                      <div class="form-group">
                     <label for="Distrito_idDistrito" class="col-md-4 control-label">Distrito</label>
                     <div class="col-md-6">
                      
                     <select name="Distrito_idDistrito" class="form-control"> 
                      
                         @foreach($distritos as $dis)
                         <option value="{{$dis->idDistrito}}">{{$dis->Nom_Dist}}</option>
                         @endforeach

                    </select>
                    </div>

                    </div>

                        <div class="form-group{{ $errors->has('Direccion') ? ' has-error' : '' }}">
                            <label for="Direccion" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="Direccion" type="text" class="form-control" name="Direccion">

                                @if ($errors->has('Direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
                            <label for="Telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="Telefono" type="text" class="form-control" name="Telefono">

                                @if ($errors->has('Telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('Nom_user') ? ' has-error' : '' }}">
                            <label for="Nom_user" class="col-md-4 control-label">Nombre de Usuario</label>

                            <div class="col-md-6">
                                <input id="Nom_user" type="text" class="form-control" name="Nom_user" value="{{ old('Nom_user') }}">

                                @if ($errors->has('Nom_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nom_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                     <label for="Rol_idRol" class="col-md-4 control-label">Rol</label>
                     <div class="col-md-6">
                      
                     <select name="Rol_idRol" class="form-control"> 
                         @foreach($roles as $r)
                         <option value="{{$r->idRol}}">{{$r->Nom_rol}}</option>
                         @endforeach
                        
                    </select>
                    </div>

                    </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
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