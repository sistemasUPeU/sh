@extends('layouts.auth') @section('htmlheader_title') Log in @endsection @section('content')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/now-ui-dashboard.mine209.css?v=1.0.0.css') }}" />

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary navbar-transparent navbar-absolute" color-on-scroll="500">
            <div class="container">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Sistema Hospital de Huaycan</a>
                </div>
              
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page section-image" filter-color="black" data-image="">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="content">
                    <div class="container">
                        <div class="col-md-4 ml-auto mr-auto">
                            <form class="form" method="POST" action="{{ url('/login') }}">
                            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="card card-login card-plain">
                                    <div class="card-header ">
                                        <div class="logo-container">
                                            <img src="../../assets/img/now-logo.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="input-group no-border form-control-lg">
                                            <span class="input-group-addon">
                              
                                </span>
                                            <input type="text" class="form-control" placeholder="Usuario..." name="Nom_user">
                                        </div>
                                        <div class="input-group no-border form-control-lg">
                                            <span class="input-group-addon">
                                </span>
                                            <input type="password" placeholder="Contraseña..." class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="card-footer ">
                                    	<button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Iniciar Sesión</button>
               
                                 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav>
                            <ul>
                                <li>
                                    <a href="https://www.creative-tim.com/">
                        Creative Tim
                    </a>
                                </li>
                                <li>
                                    <a href="http://presentation.creative-tim.com/">
                       About Us
                    </a>
                                </li>
                                <li>
                                    <a href="http://blog.creative-tim.com/">
                       Blog
                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright">
                            &copy;
                            <script>
                            document.write(new Date().getFullYear())
                            </script>, Designed by <a href="" target="_blank">Alpha</a>. Coded by <a href="" target="_blank">Team</a>.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
         @include('layouts.partials.scripts_auth')
    </body>
   

@endsection