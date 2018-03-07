@extends ('layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <div class="card f-b">
                <div class="header">
                    <div class="col-md-6 col-md-offset-4">
                        <h3>Nuevo Usuario</h3>
                    </div>
                </div>
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

                {{ csrf_field() }}
                <div class="content">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('Nom_per') ? ' has-error' : '' }}">
                                <label>Nombre</label>
                                <input id="Nom_per" type="text" class="form-control border-input" name="Nom_per">

                                @if ($errors->has('Nom_per'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nom_per') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('Apel_pater') ? ' has-error' : '' }}">
                                <label>Apellido Paterno</label>
                                <input id="Apel_pater" type="text" class="form-control border-input" name="Apel_pater">

                                @if ($errors->has('Apel_pater'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Apel_pater') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('Apel_mat') ? ' has-error' : '' }}">
                                <label>Apellido Materno</label>
                                <input id="Apel_mat" type="text" class="form-control border-input" name="Apel_mat">

                                @if ($errors->has('Apel_mat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Apel_mat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Sexo</label>
                                <select name="Sexo" class="form-control border-input">

                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>

                        </div>


                    </div>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('Fecha_nac') ? ' has-error' : '' }}">
                                <label>Fecha de Nacimiento</label>
                                <input id="Fecha_nac" type="date" class="form-control border-input" name="Fecha_nac">

                                @if ($errors->has('Fecha_nac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Fecha_nac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('DNI') ? ' has-error' : '' }}">
                                <label>N° DNI</label>
                                <input id="DNI" type="text" class="form-control border-input" name="DNI">

                                @if ($errors->has('DNI'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DNI') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Distrito</label>
                                <select name="Distrito_idDistrito" class="form-control border-input">
                                    @foreach($distritos as $dis)
                                        <option value="{{$dis->idDistrito}}">{{$dis->Nom_Dist}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>


                    </div>

                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('Direccion') ? ' has-error' : '' }}">
                                <label>Direccion</label>
                                <input id="Direccion" type="text" class="form-control border-input" name="Direccion">

                                @if ($errors->has('Direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
                                <label>N° Telefono</label>
                                <input id="Telefono" type="text" class="form-control border-input" name="Telefono">

                                @if ($errors->has('Telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('Nom_user') ? ' has-error' : '' }}">
                                <label>Nombre de Usuario</label>
                                <input id="Nom_user" type="text" class="form-control border-input" name="Nom_user"
                                       value="{{ old('Nom_user') }}">

                                @if ($errors->has('Nom_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nom_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Rol</label>
                                <select name="Rol_idRol" class="form-control border-input">
                                    @foreach($roles as $r)
                                        <option value="{{$r->idRol}}">{{$r->Nom_rol}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>


                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Contraseña</label>
                                <input id="password" type="password" class="form-control border-input" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label>Confirmar Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control border-input"
                                       name="password_confirmation">

                    <!--       

                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                     <label >Confirmar Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control border-input" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


-->
                                   
                                    </div>
                                    
                                <div class="row">  
                                <div class="content">                
                             <div class="form-group">
                <button class="btn btn-primary pull-right" type="submit">Guardar</button>
                <button class="btn btn-danger pull-left" type="reset">Cancelar</button>
            </div></div></div>

                    </div>

                    <div class="row">
                        <div class="content">
                            <div class="form-group">
                                <button class="btn btn-primary pull-right" type="submit">Guardar</button>
                                <button class="btn btn-danger pull-left" type="reset">Cancelar</button>
                            </div>
                        </div>
                    </div>

                </div>
                {!!Form::close()!!}


            </div>
        </div>
    </div>
@endsection          
                        