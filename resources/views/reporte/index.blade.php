@extends ('layouts.app')

@section('main-content')


<div class="row">
  
  <article class="col-md-12">
               <div class="row">
                <div class="col-md-4">
                        <div class="card card-background">

                            <div class="table table-primary">
                                    <h6 class="category text-info">Reporte Grafico</h6>
                                   <div class="author col-md-8 col-md-offset-2">
                              <div class="content">
                             
                                  <img class="img-responsive" src="{{asset('/img/sistema/Reporte.png')}}"/>
                                 
                                </div>  </div>

                                  
                                   <br>

                                <a href="#" class="btn btn-info"> <i class="fa fa-align-left"></i>Ingresar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-background">

                            <div class="table table-danger">
                                    <h6 class="category text-info">Reporte por Familia</h6>
                                   <div class="author col-md-8 col-md-offset-2">
                              <div class="content">
                             
                                  <img class="img-responsive" src="{{asset('/img/sistema/familia.png')}}"/>
                                 
                                </div>  </div>

                                  
                                   <br>


                                <a href="{{URL::action('ReporteController@famindex')}}"><button class="btn btn-info"><i class="fa fa-align-left"></i>Ingresar</button></a>

                               
                            </div>
                        </div>
                    </div>
               </div>
    </article>
</div>


@endsection