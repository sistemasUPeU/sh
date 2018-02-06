@extends ('layouts.app')

@section('main-content')

 <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
   <div class="row justify-content: center">
   <div class="col-lg-6 col-md-6 col-md-offset-2">
		<h3>Asistencias <i class="ti-clipboard"></i></h3>
	   
	</div>
   </div>
 
                   
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
					 
                    <th>Familia</th>
 	<th>Asistencia de {{ $fechas->Fecha}}</th> 
<th>Opciones</th>
				</thead>
 
 
@foreach ($auditoria as $au)
 <?php $bandera = 0 ?>
 <?php $nulo = 0 ?>
				<tr>
					<td>{{ $au->Nom_fam}}</td>
	

@foreach($asistencia as $asis)

@if($au->idFamilia == $asis->Familia_idFamilia && $asis->Estado_asistencia == 1) <!-- aqui igualo la id -->
 <?php $bandera++ ?>
 @endif

 @if($au->idFamilia == $asis->Familia_idFamilia && $asis->Estado_asistencia == 2) <!-- aqui igualo la id -->
 <?php $nulo++ ?>
 @endif
 @endforeach

@if ($bandera)
<td><label class="box-label">
        <input type="checkbox" class="box-check" checked disabled/>
        <span class="box-text"></span>
    </label>  
</td> 

<td><a data-target="#modal-EditAsis-" data-toggle="modal"><button class="btn"><i class="ti-pencil-alt2"></i> Editar</button></a></td>

@elseif($nulo)
<td><label class="box-label">
        <input type="checkbox" class="box-check" disabled/>
        <span class="box-text"></span>
    </label></td> 

<td><a data-target="#modal-ReRegAsis-" data-toggle="modal"><button class="btn btn-info"><i class="ti-receipt"></i> Registrar E.</button></a></td>
@else
<td><label class="box-label">
        <input type="checkbox" class="box-check" disabled/>
        <span class="box-text"></span>
    </label></td>

<td><a data-target="#modal-RegAsis-" data-toggle="modal"><button class="btn btn-info"><i class="ti-receipt"></i> Registrar</button></a></td>

@endif




</tr>
				@endforeach
                                </table>

                            </div> 
                           {{$auditoria->render()}}
                        </div>
                    </div>

  @include('sesiones.asistencia.ReRegAsis') 
  @include('sesiones.asistencia.RegAsis') 
  @include('sesiones.asistencia.EditAsis') 
                </div>
            </div>

@endsection