@extends ('layouts.app')

@section('main-content')

 <div class="container" style="background-color: white;">
  <div class="row justify-content: center">
   
 
	<div class="col-lg-6 col-md-6 col-md-offset-2">
		<h3>Lista de Familias</h3>
	 
	</div>
</div>
 


<br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					 
                    <th>Familia</th>
					<th>Asistencia de {{ $fechas->Fecha}}</th>

				</thead>
 

               @foreach ($auditoria as $au)
				<tr>
					<td>{{ $au->Nom_fam}}</td>
						


<?php if ($au->Estado_asistencia== '1'): ?>
                     <td> <label class="box-label">
		<input type="checkbox" class="box-check" checked />
		<span class="box-text"></span>
	</label>  
</td>

                    <?php else: ?>
           <td> <label class="box-label">
		<input type="checkbox" class="box-check"  />
		<span class="box-text"></span>
	</label>  
</td>
                    <?php endif ?>


						


	</tr>
			  
				@endforeach
			</table>
		</div>
<!-- la paginacion -->
		{{$auditoria->render()}}
	</div>
</div>
</div> 
@endsection