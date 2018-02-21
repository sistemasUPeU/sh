@extends('layouts.app')

@section('htmlheader_title')
    Carnet-Familiar
@endsection


@section('main-content')
    
<link rel="stylesheet" href="{{ URL::asset('css/page-style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/cards-style.css') }}" />

<body>
    <article class="col-md-12">
        <!-- Modern - Bootstrap Cards -->
        <header>
            <h2>Familia : {{$family->Nom_fam}}</h2> </header>
        <!-- BLOG CARDS -->
        <div class="cards-1 section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#"> <img class="img" src="{{ asset('img/3.png') }}">
                                    <div class="card-caption"> Quisque a bibendum magna </div>
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                <h6 class="category text-info">NIÑO (S)</h6>
                                <p class="card-description"> Lorem ipsum dolor sit amet, consectetur adipis cingelit. Etiam lacinia elit et placerat finibus. Praesent justo metus, pharetra vel nibh sit amet, tincidunt posuere nulla. Vivamus odio antement, feugiat eget nisi sit amet, scelerisque dignissim velit antement. </p>
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
                                            <a href="#">Vivamus odio ante, feugiat eget nisi sit amet, dignissim velit.</a>
                                        </h4>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="images/avatar2.png" alt="" class="avatar img-raised"> <span>Patrick Wood</span>
                                            <div class="ripple-cont">
                                                <div class="ripple ripple-on ripple-out" style="left: 574px; top: 364px; background-color: rgb(60, 72, 88); transform: scale(11.875);"></div>
                                            </div>
                                        </a>
                                    </div>
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
                            <a href="#">Vivamus odio ante, feugiat eget nisi sit amet, dignissim velit</a>
                            </h4>
                                <p class="card-description"> Lorem ipsum dolor sit amet, consectetur adipis cingelit. Etiam lacinia elit et placerat finibus.</p>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="images/avatar3.png" alt="..." class="avatar img-raised"> <span>
                                            {{$family->Nom_fam}}
                                        </span> </a>
                                    </div>
                                    <div class="stats"> <i class="fa fa-clock-o"></i> 10 min </div>
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
                                <a href="#">Vivamus odio ante, feugiat eget nisi sit amet, dignissim velit</a>
                            </h4>
                                <div class="ftr">
                                    <div class="author">
                                        <a href="#"> <img src="{{ asset('img/avatar4.png') }}" alt="..." class="avatar img-raised"> <span>{{$family->Madre_apel_pa}}, {{$family->Madre_nombre}}</span> </a>
                                    </div>
                                    <div class="stats"> <i class="fa fa-clock-o"></i> 15 min </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection

