@extends ('layouts.app')

@section('main-content')

 <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
   <div class="row justify-content: center">
   <div class="col-lg-6 col-md-6 col-md-offset-2">
		<h3>Asistencias</h3>
	   
	</div>
   </div>
 
                   
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
					 
                    <th>Familia</th>
 	<th>Asistencia de {{ $fechas->Fecha}}</th> 

				</thead>
 
 
@foreach ($auditoria as $au)
				<tr>
					<td>{{ $au->Nom_fam}}</td>
						
@foreach($asistencia as $asis)
                     
<?php if ($au->idFamilia == $asis->Familia_idFamilia): ?>

<?php if ($asis->Estado_asistencia== '1'): ?>
     <td><?php echo 'asistio' ?></td>  

@break
<?php elseif($asis->Estado_asistencia== '0'): ?>
    <td><?php echo 'no asistio' ?></td>
@break

<?php elseif($asis->Estado_asistencia== null): ?>

  <td><?php echo 'no registrado' ?></td>
@break

<?php endif ?>

<?php endif ?>
@endforeach


</tr>
				@endforeach
                                </table>

                            </div>
                            {{$auditoria->render()}}
                        </div>
                    </div>



                </div>
            </div>

@endsection