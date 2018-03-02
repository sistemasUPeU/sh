@extends ('layouts.app')

@section('main-content')

 <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
   <div class="row justify-content: center">
   <div class="col-lg-6 col-md-6 col-md-offset-2">
		<h3>Lista de trabajadores</h3>
	    @include('seguridad.usuario.search')
	</div>
   </div>
 

<div class="row">
	<div class="col-md-2 col-lg-2">
    	 <a href="usuario/create"><button class="btn btn-success"><i class=" glyphicon glyphicon-plus"></i> Nuevo</button></a>
    </div> 
</div>
                          
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
					<th>Persona</th>
					<th>Usuario</th>
                    <th>Distrito</th>
					<th>Telefono</th>
					<th>DNI</th>
					<th>Rol</th>
                    <th>Estado</th>



					<th>Opciones</th>

				</thead>
 

               @foreach ($personas as $per)
				<tr>
					<td>{{ $per->Nom_per.' '.$per->Apel_pater.' '.$per->Apel_mat}}</td>
					<td>{{ $per->Nom_user}}</td>
					<td>{{ $per->Nom_Dist}}</td>
                    <td>{{ $per->Telefono}}</td>
                    <td>{{ $per->DNI}}</td>
                    <td>{{ $per->Nom_rol}}</td>

                    <?php if ($per->Estado_user== '1'): ?>
                    <td>Activo</td>	
                    <?php else: ?>
                    <td>Desactivo</td>		
                    <?php endif ?>



		
					<td>
					<!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
						<a href="{{URL::action('UsuarioController@show',$per->idPersona)}}"><button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Editar Trabajador</button></a>
					</td>	
				</tr>
			  
				@endforeach
                                </table>

                            </div>
                            {{$personas->render()}}
                        </div>
                    </div>




                            @foreach ($personas as $per)
                                <tr>
                                    <td>{{ $per->Nom_per.' '.$per->Apel_pater.' '.$per->Apel_mat}}</td>
                                    <td>{{ $per->Nom_user}}</td>
                                    <td>{{ $per->Nom_Dist}}</td>
                                    <td>{{ $per->Telefono}}</td>
                                    <td>{{ $per->DNI}}</td>
                                    <td>{{ $per->Nom_rol}}</td>

                                    <?php if ($per->Estado_user == '1'): ?>
                                    <td>Activo</td>
                                    <?php else: ?>
                                    <td>Desactivo</td>
                                    <?php endif ?>


                                    <td>
                                        <!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
                                        <a href="{{URL::action('UsuarioController@show',$per->idPersona)}}">
                                            <button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i>
                                                Editar Trabajador
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                        </table>

                    </div>
                    {{$personas->render()}}

@extends ('layouts.app') @section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="row justify-content: center">
                    <div class="col-lg-6 col-md-6 col-md-offset-2">
                        <h3>Lista de trabajadores</h3> @include('seguridad.usuario.search')
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <a href="usuario/create">
                            <button class="btn btn-success"><i class=" glyphicon glyphicon-plus"></i> Nuevo</button>
                        </a>
                    </div>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>Persona</th>
                            <th>Usuario</th>
                            <th>Distrito</th>
                            <th>Telefono</th>
                            <th>DNI</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </thead>
                        @foreach ($personas as $per)
                        <tr>
                            <td>{{ $per->Nom_per.' '.$per->Apel_pater.' '.$per->Apel_mat}}</td>
                            <td>{{ $per->Nom_user}}</td>
                            <td>{{ $per->Nom_Dist}}</td>
                            <td>{{ $per->Telefono}}</td>
                            <td>{{ $per->DNI}}</td>
                            <td>{{ $per->Nom_rol}}</td>
                            <?php if ($per->Estado_user== '1'): ?>
                            <td>Activo</td>
                            <?php else: ?>
                            <td>Desactivo</td>
                            <?php endif ?>
                            <td>
                                <!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
                                <a href="{{URL::action('UsuarioController@show',$per->idPersona)}}">
                                    <button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Editar Trabajador</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                {{$personas->render()}}
            </div>

        </div>
    </div>

        </div>
    </div>
</div>

@endsection