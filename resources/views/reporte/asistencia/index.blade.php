@extends ('layouts.app')

@section('main-content')
 
<div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
   <div class="row justify-content: center">
   <div class="col-lg-6 col-md-6 col-md-offset-2">
		<h3>Reporte <i class="ti-clipboard"></i></h3>
    @include('reporte.asistencia.search') 
	   
	</div>
   </div>
 
                   
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
					 
                    <th>Familia</th>
 	<th>Reporte de asistencia</th>
				</thead>
 
 
@foreach ($familias as $fa)


				<tr>
					<td>{{ $fa->Nom_fam}}</td>
	                <td>hola</td>
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