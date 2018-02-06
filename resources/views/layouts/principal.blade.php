<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}"/>
    <meta property="og:url" content="http://demo.adminlte.acacha.org/"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png"/>
    <meta property="og:sitename" content="demo.adminlte.acacha.org"/>
    <meta property="og:url" content="http://demo.adminlte.acacha.org"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@acachawiki"/>
    <meta name="twitter:creator" content="@acacha1"/>

    <title>Sys-Hospital</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/animations.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/Principal.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation" style="position:relative; min-height: 100% ">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand smoothScroll" href="#slider"><b>Hospital de Huaycan</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">{{ trans('Inicio') }}</a></li>
                <li><a href="#finalidad" class="smoothScroll">{{ trans('Finalidad') }}</a></li>
                <li><a href="#objetivo" class="smoothScroll">{{ trans('Objetivo') }}</a></li>
                <li><a href="#contact" class="smoothScroll">{{ trans('Contactanos') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                <!-- <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>  -->

                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
<section id="slider" name="slider"></section>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner res-text" role="listbox">
        <div class="item active">
            <img class="img-responsive" src="{{ asset('/img/carrousel/1.jpeg    ') }}" alt="firstimagen">
            <div class="carousel-caption">
                <h1 class="text-center">Con niños<strong>
                        fuertes y
                        sanos </strong>aseguraremos el futuro de nuestro país...</h1>
                <h5 class="text-uppercase text-green">Ven y participa del Plan nacional para la Reduccion de la desnutricion
                    cronica infantil y la prevencion de la anemia
                    en el país</h5>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src="{{ asset('/img/carrousel/2.jpeg    ') }}" alt="firstimagen">
            <div class="carousel-caption animatedParent">
                <h1 class="text-center animated bounceInDown">Con niños<strong> fuertes y
                        sanos </strong>aseguraremos el
                    futuro de nuestro país...</h1>
                <h5 class="text-uppercase">Ven y participa del Plan nacional para la Reduccion de la desnutricion
                    cronica infantil y la prevencion de la anemia
                    en el país</h5>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src="{{ asset('/img/carrousel/3.jpeg    ') }}" alt="firstimagen">
            <div class="carousel-caption animatedParent">
                <h1 class="text-center animated bounceInDown">Con niños<strong> fuertes y
                        sanos </strong>aseguraremos el
                    futuro de nuestro país...</h1>
                <h5 class="text-uppercase">Ven y participa del Plan nacional para la Reduccion de la desnutricion
                    cronica infantil y la prevencion de la anemia
                    en el país</h5>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src="{{ asset('/img/carrousel/4.jpeg    ') }}" alt="firstimagen">
            <div class="carousel-caption">
                <h1 class="text-center">Con niños<strong> fuertes y
                        sanos </strong>aseguraremos el futuro de nuestro país...</h1>
                <h5 class="text-uppercase">Ven y participa del Plan nacional para la Reduccion de la desnutricion
                    cronica infantil y la prevencion de la anemia
                    en el país</h5>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="home" name="home"></section>
<div id="headerwrap"  style="height: 100%">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12 animatedParent" data-sequence='300'>
                <h1 class="animated bounceInDown slower" id="h1" data-id='1'><b><a href="#">FAMILIA SALUDABLE - HOSPITAL DE
                            HUAYCAN<br/><br/></a></b></h1>
                <h3 class="animated bounceInRight" id="h3" data-id='2'><a href="">Plan Nacional para la Reducción de la
                        desnutrición crónica infantil</a> y
                    la prevención de la anemia en el País - <a href="">Ministerio de Salud</a></h3>
                </a></h3><br/><br/>
            </div>
            <div class="col-lg-2">
                <h5></h5>
                <p></p>
            </div>
            <div class="col-lg-8 animatedParent">
                <img class="img-responsive animated bounceInUp delay-500 slower"
                     id="only" src="{{ asset('/img/carousel2/hosp.jpg    ') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <h5></h5>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->

<section id="finalidad" name="finalidad"></section>
<div id="headerwrap" style="height: 100%; background-color:white">
    <div class="container">
        <div class="centered col-lg-12 animatedParent">
            <h1 class="animated bounceInLeft delay-250 slower tit-finalidad"><b><a href="#">Finalidad del Programa</b></a></b></h1>
            <br/><br/>
            <div class="col-md-6 col-xs-12 animatedParent alinear-h3-finalidad">
                <br/><br/>
                <h3 class="text-justify animated bounceInLeft slower parrafo-finalida" style="color: #000000">Promover el desarrollo
                    infantil como una inversión
                    pública en el capital humano del país para permitir el progreso
                    económico y social de todos los peruanos, con inclusión y equidad social.<br><br></h3>
                <h3 id="no" class="text-justify animated bounceInRight slower parrafo-finalidad2" style="color: #000000"> Asimismo, busca orientar
                    y fortalecer las acciones institucionales y la coordinación permanente con
                    los distintos actores y gestores involucrados,
                    a fin que permita alcanzar los objetivos planteados en el corto, mediano y largo plazo, asi como el
                    generar los mecanismos de seguimiento y evaluación
                    de las actividades programadas.
                </h3>
                <br/><br/>
            </div>
            <div class="col-md-6 col-xs-12" id="fin-img">
                <br><br><br><br>
                <div class="col-xs-4 col-sm-6  animatedParent">
                    <a href="#"><img src="{{ asset('/img/Eva-Familiar.png') }}" alt="" class="img-circle"></a>
                    <h3 style="color: #3c8dbc" class="animated bounceInDown slower">Evaluacion Familiar </h3>
                </div>
                <div class="col-xs-4 col-sm-6 animatedParent">
                    <a href="#"><img src="{{ asset('/img/Eva-Madre.png') }}" alt="" class="img-circle"></a>
                    <h3 style="color: #3c8dbc" class="animated bounceInDown slower">Evaluacion de la Madre</h3>
                    <br><br><br>
                </div>
                <div class="col-xs-12 col-sm-12 animatedParent">
                    <a href="#"><img src="{{ asset('/img/Eva-hijos.png') }}" id="3i" alt="" class="img-circle"></a>
                    <h3 style="color: #3c8dbc" class="animated bounceInDown slower">Evaluacion del Niño </h3>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->

<section id="objetivo" name="objetivo"></section>
<div style="height:" id="features" class="">
    <div class="container animatedParent objectives">
        <h1 class="text-center animated bounceInUp slower" style="font-size: 60px"><b><a href="">Objetivo del Programa</b></a></b></h1>
        <div class="row">
            <div class="col-md-6 col-xs-12" id="carousel-objetivo">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <br><br><br><br><br>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="border-radius: 24px 24px 24px 24px">
                        <div class="item active">
                            <img src="{{ asset('/img/carousel2/2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/carousel2/3.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/carousel2/4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <h3></h3>
                <br>
                <!-- ACCORDION -->
                <div class="accordion ac ob-gen" id="accordion2">
                    <div class="col-xs-12">
                        <div  class="animatedParent">
                            <h1 class="animated bounceInRight slower text-center">Objetivo General
                            </h1>
                        </div><!-- /accordion-heading -->
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <br>
                                <p class="text-justify animated bounceInRight slowest"> Contribuir con la reducción de la desnutrición crónica infantil
                                    al
                                    10% y la
                                    anemia en menores de 3 años
                                    al 20%</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->

                    <div class="animatedParent col-xs-12 no-res">
                        <div>
                            <h1 class="animated bounceInRight slower text-center">
                                Objetivos Específicos
                            </h1>
                        </div>
                        <div>
                            <div>
                                <p class="text-justify animated bounceInRight slowest">
                                    <br>
                                    1. Disminuir la prevalencia de niños con bajo peso al nacer.<br>
                                    2. Incrementar la calidad de la atención prenatal y el parto institucional.<br>
                                    3. Incrementar el número de hogares con agua tratada.<br>
                                    4. Incrementar la proporción de niños menores de 3 años con vacunas completas.<br>
                                    5. Incrementar la proporción de niños menores de 3 años con control de crecimiento y
                                    desarrollo
                                    oportuno.
                                </p>

                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                </div><!-- Accordion -->
            </div>
        </div>
    </div>
</div><!--/ .container -->


<section id="contact" name="contact"></section>
<div id="footerwrap" class="col-xs-12 ">
    <div class="container animatedParent">
        <div class="col-lg-5 animated bounceInLeft slowest">
            <h3>Nuestra Direccion</h3>
            <p>
                Av. J.C. Mariátegui,<br/>
                S/N Zona "B" ,<br/>
                Huaycán - Ate<br/>
                Lima-Perú
            </p>
            <h3>Llámanos</h3>
            <p>
                Teléfonos:<br/>
                371-6049 / 371-6797<br/>
                371-5979 / 371-5530<br/>
            </p>
        </div>


        <div class="col-lg-7 col-xs-12  animatedParent">
            <h3 class="animated bounceInDown slowest">Contactanos</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain" class="animated bounceInRight slowest">
                <div class="form-group">
                    <label for="name1">Nombre</label>
                    <input type="name" name="Name" class="form-control" id="name1"
                           placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                </div>
                <div class="form-group">
                    <label for="email1">Email</label>
                    <input type="email" name="Mail" class="form-control" id="email1"
                           placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                </div>
                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container ">
        <p class="col-xs-12 ">
            <a href=""></a><b>Sys-Hospital de Huaycan</b>
            </a><br/>
            <strong>Copyright &copy; 2015</strong> {{ trans('adminlte_lang::message.createdby') }}
            <a href="">Alpha-Team</a>
            <br/>
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/js/css3-animate-it.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $.doTimeout(2500, function () {
            $('.repeat.go').removeClass('go');

            return true;
        });
        $.doTimeout(2520, function () {
            $('.repeat').addClass('go');
            return true;
        });

    });
    $('.carousel').carousel({
        interval: 3000
    })
</script>
</body>
</html>
