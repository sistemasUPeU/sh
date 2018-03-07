@extends ('layouts.app')

@section('main-content')

<!-- <div class="row">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<Label>Programa</Label>
	<input type="text"  value="" id="pro">
		<a href="#"><button class="btn btn-success"><</button></a>
		<a><button class="btn btn-success">></button></a>
	    
	</div>   
</div>-->

<!--Programa para que liste el año en el cual se realiza>
<!--<div class="row">

<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<label>Programa</label>
<div class="col-md-3">
<label>{{''}}</label>
</div>
  <a href="#" ><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<a href="#" ><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>
</div>-->





<div class="row">
 
		
			
      <div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
  <div class="card-header" style="display: block; margin:auto; max-width: 92%; max-height: 80%;"><img src="/img/Evaluar/familia.jpeg" style="margin-top: 10%;"></div>
  <div class="card-body" style="text-align: center;">
    
    <h4 style="font-family: 'Tahoma', fantasy">Familia</h4>
    <p class="card-text">Nombre Familia causa</p>

    <h4 style="font-family: 'Tahoma', fantasy">Responsable</h4>
    <p class="card-text">Responsable familia causa</p>

    <h4 style="font-family: 'Tahoma', fantasy">Tipo de Familia</h4>
    <p class="card-text">Tipo de familia</p>
  </div>

</div>
      <div class="card text-white bg-primary mb-3"  style="max-width: 50rem; float: right;">
  <div class="card-header" style="display: block; margin:auto; max-width: 92%; max-height: 80%;"><img src="/img/Evaluar/evalua.png" style="margin-top: 10%;"></div>
  <div class="card-body" style="text-align: center;">
    
    <h4 style="font-family: 'Tahoma', fantasy">Estado</h4>
    <p class="card-text">Nombre Familia causa</p>

    <h4 style="font-family: 'Tahoma', fantasy">Abandono</h4>
    <p class="card-text">Responsable familia causa</p>

    <h4 style="font-family: 'Tahoma', fantasy">Evaluación</h4>
    <a data-toggle="modal" data-target="#modaleval" href="#" class="label label-success"><i class="fa fa-list" aria-hidden="true"></i></a>

  </div>
  

</div>

		

<!-- la paginacion -->
		
	

</div>
</div>
<!--cards-->


<!--Modal Evaluacion-->

<div class="modal fade" id="modaleval" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" style=> 
  <div class="modal-dialog" >
    <div class="modal-content" >

      <div class="modal-header" style="text-align:center;">
                    
        <Label>Evaluación Familia</Label>
                      
        <a class="close"   data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></a>
      </div>
      
            <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          
  
            <th>#</th>

          

          <th class="text-center">Criterios de Evaluación</th>
          <th class="text-center">Calificar</th>
          


        </thead>
 

               @foreach ($evaluaciones as $eval)
        <tbody></tbody>
        <tr>
          <th scope="row">1</th>
          <td>   Asistencia a Sesiones</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
                <tr>
          <th scope="row">2</th>
          <td>   Niños con vacunas completas según edad</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
                <tr>
          <th scope="row">3</th>
          <td>Niños sin desnutrición ni anemia<br>(últimos 3 meses)</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
                <tr>
          <th scope="row">4</th>
          <td>Control Prenatal<br>(más de 6 controles)</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
               <tr>
          <th scope="row">5</th>
          <td>La gestante y su familia reconocen los signos de alarma del embarazo</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
               <tr>
          <th scope="row">6</th>
          <td>Conoce sobre planificación familiar</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
               <tr>
          <th scope="row">7</th>
          <td>Utiliza métodos anticonceptivos</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
               <tr>
          <th scope="row">8</th>
          <td>Familia con plan familiar</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
               <tr>
          <th scope="row">9</th>
          <td>Familia que participa en actividades comunales</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
               <tr>
          <th scope="row">10</th>
          <td>Familia con normas de convivencia para vivir en armonía</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
         <tr>
          <th scope="row">11</th>
          <td>Familia que practica valores</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
         <tr>
          <th scope="row">12</th>
          <td>Familia con practicas saludables que protegen su salud</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
         <tr>
          <th scope="row">13</th>
          <td>Acude al Hospital</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
         <tr>
          <th scope="row">14</th>
          <td>Vivienda ventilada, limpia y ordenada</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
         <tr>
          <th scope="row">15</th>
          <td>Huerto implementado-árbol plantado</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
         <tr>
          <th scope="row">16</th>
          <td>Depósitos de agua adecuadamente lavados y tapados</td>
          <td class="text-center"><input type="checkbox" name=""></td>
          
        </tr>
        </tbody>  

                @endforeach


      </table>
      <div>
        <input type="button" class="btn btn-success"  style="float: right;" value="Guardar" >
      </div>
      
    </div>

<!-- la paginacion -->
    {{$evaluaciones->render()}}
  </div>

</div>

             
      </div>
      
    </div>
  </div>
  
  



@endsection