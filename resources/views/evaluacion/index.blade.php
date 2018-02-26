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
					<th>ID</th>
					<th>NOMBRE FAMILIA</th>
                    <th>MADRE</th>
                    <th>NIÑOS</th>
				</thead>
 

               @foreach ($familias as $fa)
				<tr>
					<td>{{ $fa->idFamilia}}</td>
					<td>{{ $fa->Nom_fam}}</td>
                    <td>{{ $fa->Madre_nombre.' '.$fa->Madre_apel_pa.' '.$fa->Madre_apel_ma}}</td>

                  @foreach($ninos as $ni)
 
                  @if($fa->idMadre == $ni->Madre_idMadre)
                    <td>{{ $ni->Nino_nombre}}</td>
                    @endif
                    @endforeach
				</tr>
			   <td>
            <a href="{{URL::action('FamiliaController@show',$fa->idFamilia)}}"><button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Ver</button></a>
          </td> 
				@endforeach

                                </table>

                            </div>
                            {{$familias->render()}}
                        </div>
                    </div>

                </div>
            </div>
@endsection