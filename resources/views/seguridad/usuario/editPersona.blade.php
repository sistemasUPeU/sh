@extends ('layouts.app')
@section('main-content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Persona: {{ $persona->idPersona }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif


           
            {!!Form::model($persona,['method'=>'PATCH','route'=>['seguridad.usuario.updatePersona',$persona->idPersona]])!!}
             
            
            {{Form::token()}}


                        <div class="form-group{{ $errors->has('Nom_per') ? ' has-error' : '' }}">
                            <label for="Nom_per" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="Nom_per" type="text" class="form-control" name="Nom_per" value="{{$persona->Nom_per}}">
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('Apel_pater') ? ' has-error' : '' }}">
                            <label for="Apel_pater" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="Apel_pater" type="text" class="form-control" name="Apel_pater" value="{{$persona->Apel_pater}}">
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('Apel_mat') ? ' has-error' : '' }}">
                            <label for="Apel_mat" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="Apel_mat" type="text" class="form-control" name="Apel_mat" value="{{$persona->Apel_mat}}">            
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('DNI') ? ' has-error' : '' }}">
                            <label for="DNI" class="col-md-4 control-label">N° DNI</label>

                            <div class="col-md-6">
                                <input id="DNI" type="text" class="form-control" name="DNI" value="{{$persona->DNI}}">
                            </div>
                        </div>
   
   



                          <div class="form-group{{ $errors->has('Fecha_nac') ? ' has-error' : '' }}">
                            <label for="Fecha_nac" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="Fecha_nac" type="date" class="form-control" name="Fecha_nac" value="{{$persona->Fecha_nac}}">
                            </div>
                        </div>

                        
                     <div class="form-group">
                     <label for="Sexo" class="col-md-4 control-label">Sexo</label>
                     <div class="col-md-6">
                      
                     <select name="Sexo" class="form-control"> 
                          
                         <?php if ($persona->Sexo == 'Masculino'): ?>
                          <option value="Masculino" selected="">Masculino</option>
                          <option value="Femenino">Femenino</option>  

                          <?php elseif ($persona->Sexo == 'Femenino'): ?>
                           <option value="Femenino" selected="">Femenino</option>
                           <option value="Masculino">Masculino</option>

                          <?php endif ?> 
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
                                <input id="Direccion" type="text" class="form-control" name="Direccion" value="{{$persona->Direccion}}">
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
                            <label for="Telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="Telefono" type="text" class="form-control" name="Telefono" value="{{$persona->Telefono}}">
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