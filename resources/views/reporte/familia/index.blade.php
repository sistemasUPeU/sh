@extends ('layouts.app')

@section('main-content')
<div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
   <div class="row justify-content: center">
   <div class="col-lg-6 col-md-6 col-md-offset-2">
		
	   @include('evaluacion.search')
	</div>
   </div>
                         
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
	
					<th>NOMBRE FAMILIA</th>
                    <th>MADRE</th>
                    <th>NIÑOS</th>
                    <th>OPCION</th>
				</thead>
 

               @foreach ($familias as $fa)
				<tr>
			
					<td>{{ $fa->Nom_fam}}</td>
                    <td>{{ $fa->Madre_nombre.' '.$fa->Madre_apel_pa.' '.$fa->Madre_apel_ma}}</td>
<td>
                  @foreach($ninos as $ni)
                  
                  @if($fa->idMadre == $ni->Madre_idMadre)
                       <?php echo $ni->Nino_nombre.' '; ?>   
                    @endif
                    @endforeach
                   </td>

                   <td>
					<!-- aqui ejecuta una accion pidiendo permiso al controlador enviando la id -->
						<a href="{{URL::action('ReporteController@show',$fa->idFamilia)}}"><button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Reporte</button></a>
					</td>
				</tr>
			  
				@endforeach
                                </table>

                            </div>
                            {{$familias->render()}}
                        </div>
                    </div>

                </div>
            </div>

@endsection




