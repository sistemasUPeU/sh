@extends ('layouts.app')

@section('main-content')

  <div class="row">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		<h3>Listado de Usuarios <a href="usuario/create"><button class="btn btn-success">Nuevo</button></a></h3>
	    @include('seguridad.usuario.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
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



				<!--	<td>{{ $per->Estado_user}}</td> -->
					<td>
					<!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
						<a href="{{URL::action('UsuarioController@show',$per->idPersona)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$per->idPersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
			  
				@endforeach
			</table>
		</div>
<!-- la paginacion -->
		{{$personas->render()}}
	</div>
</div>

@endsection