@extends('layouts.app') @section('htmlheader_title') Carnet-Familiar @endsection @section('main-content')
<link rel="stylesheet" href="{{ URL::asset('css/page-style.css') }}" xmlns="http://www.w3.org/1999/html"/>
<link rel="stylesheet" href="{{ URL::asset('css/cards-style.css') }}" />

@extends ('layouts.app') @section('main-content')

<body>
    <article class="col-md-12">
        <!-- Modern - Bootstrap Cards -->
        <header>
            <h4>Familia : {{$family->Nom_fam}}</h4> </header>
        <!-- BLOG CARDS -->
        <div class="cards-1 section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#"> <img class="img" src="{{ asset('img/3.png') }}">
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                <h6 class="category text-info">NIÑO (S)</h6>
                                <p class="card-description">
                                    <dl class="dl-horizontal">
                                        @foreach($ninos as $ni)
                                        @if($family->idMadre == $ni->Madre_idMadre)  
                                        <dt>Nombres:</dt>
                                        <dd>{{ $ni->Nino_nombre}}</dd>
                                        <dt>Historial Clinico:</dt>
                                        <dd>{{ $ni->Nino_HC}}</dd>
                                        <dt>DNI:</dt>
                                        <dd>{{ $ni->Nino_DNI}}</dd>
                                        <br>
                                        <br>
                                        @endif
                                        @endforeach
                                    </dl>
                                </p>
                                  <div class="ftr">
                                    <div class="author">
                                        <a href="{{URL::action('ninoController@show',$family->idMadre)}}"> <img src="{{ asset('img/greeen.png') }}" alt="..." class="avatar img-raised"> <span>Mas información</span> </a>
                                    </div>
                                    <div class="stats"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="table">
                                <h6 class="category text-danger">
                                            <i class="fa fa-globe "></i> ESTADO
                                        </h6>
                                <h4 class="card-caption">
                                            <a href="#">Activo</a>
                                        </h4>
                                <div class="ftr">
                                    <div class="stats"> <i class="fa fa-heart"></i> 342 &nbsp; <i class="fa fa-comment"></i> 45 </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#"> <img class="img" src="{{ asset('img/2.png') }}"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                <h6 class="category text-success"><i class="fa fa-university"></i> FAMILIA</h6>
                                <h4 class="card-caption">
                            <a href="#">Codigo: {{$family->Codigo_fam}}</a>
                            </h4>
                                <p class="card-description"> 
                                       <dl class="dl-horizontal">
                                        <dt>Responsable: </dt>
                                        <dd>{{ $family->Respons_fam}}</dd>

                                        <dt>Tipo de Familia:</dt>
                                        @if($family->Tipo_Familia_idTipo_Familia==1)
                                        <dd>Nueva</dd>
                                        @endif
                                         @if($family->Tipo_Familia_idTipo_Familia==2)
                                        <dd>Reingresante</dd>
                                        @endif
                                         @if($family->Tipo_Familia_idTipo_Familia==3)
                                        <dd>Continuadora</dd>
                                        @endif


                                        <dt>Modo de Captación:</dt>
                                        @if($family->Modo_Captacion_idModo_Captacion==1)
                                        <dd>Visita Domiciliaria</dd>
                                        @endif
                                         @if($family->Modo_Captacion_idModo_Captacion==2)
                                        <dd>Hospital</dd>
                                        @endif
                                         @if($family->Modo_Captacion_idModo_Captacion==3)
                                        <dd>Campaña de Salud</dd>
                                        @endif
                                        @if($family->Modo_Captacion_idModo_Captacion==4)
                                        <dd>Otros</dd>
                                        @endif
                                        <br>
      
                      
                                    </dl>
                                </p>
                                 <div class="ftr">
                                    <div class="author">
                                        <a href=""> <img src="{{ asset('img/greeen.png') }}" alt="..." class="avatar img-raised"> <span>Mas información</span> </a>
                                    </div>
                                    <div class="stats"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#"> <img class="img" src="{{ asset('img/1.png') }}"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                <h6 class="category text-warning">
                                            <i class="fa fa-soundcloud"></i> MADRE
                                        </h6>
                                <h4 class="card-caption">
                                <a href="{{action('MadreController@show',$family->idMadre)}}"></a>
                            </h4>
                                <div class="ftr">
                                    <div class="author">

                                      </div>
                                    <strong><td><label style="color: black ;  font-family: fantasy; "> Nombre: </label> {{$family->Madre_nombre}}</td><br>

                                        <td><label style="color: black ;  font-family: fantasy; "> Apellido:</label> {{$family->Madre_apel_pa}}</td><br></strong>
                                 <div class="stats"> <i class="fa fa-clock-o"></i> 15 min </div>
                                </div>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="{{action('MadreController@show',$family->idMadre)}}"> <img src="{{ asset('img/greeen.png') }}" alt="..." class="avatar img-raised"> <span>Mas información</span> </a>
                                    </div>
                                    <div class="stats"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

@endsection