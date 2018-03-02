@extends ('layouts.app')

@section('main-content')


<div class="row">
<div class="col-md-12">

 <div class="card">
                            <div class="header">


<div class="row">
	

<!-- horizontal tabs -->
<div class="nav-tabs-navigation">
    <div class="nav-tabs-wrapper">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#home" data-toggle="tab">Asistencia de Sesiones</a></li>
            <li><a href="#profile" data-toggle="tab">Profile</a></li>
            <li><a href="#messages" data-toggle="tab">Informacion de la familia</a></li>
        </ul>
    </div>
</div>
<div id="my-tab-content" class="tab-content text-center">
    <div class="tab-pane active" id="home">

   


     <div class="row">

                    <div class="col-md-12">

                            <div class="header">
                               
   <div class="row justify-content: center">
   <div class="col-lg-6 col-md-6 col-md-offset-2">
		<h3>REPORTE DE SESIONES</h3>

	</div>
   </div>
 
                  
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
					<th>Nombre de la sesion</th>
					<th class="text-center">Asistencia</th>
 
				</thead>
@foreach ($sesiones as $ses)
				<tr>
                    

                    
					<td class="text-left">{{ $ses->Nom_sesion}}</td>
                    



					<td ><div class="containers">
  <ol class="progress-meter">
    <li class="progress-point done">05:20 mins</li><li class="progress-point done">05:10 mins</li><li class="progress-point done">Link</li><li class="progress-point todo">Connect</li><li class="progress-point todo">Connect</li>
  </ol>
</div></td>
        
				</tr>  @endforeach

                                </table>

                            </div>

                        </div>
                    </div>

            </div>









    </div>
    <div class="tab-pane" id="profile">
        <p>Here is your profile.</p>
    </div>
    <div class="tab-pane" id="messages">
        <p>Here are your messages.</p>
    </div>
</div>



</div>








</div>
</div>
</div>

@endsection

