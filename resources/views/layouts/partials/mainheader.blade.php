<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SH</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sys</b>-Hospital </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
               
                @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
 
                    <li>
                     <a href="" data-target="#modal-logout" data-toggle="modal" style="border: none;"><i class="glyphicon glyphicon-off" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesion"></i> salir</a>

                    <div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-primary">Estas seguro que deseas salir de tu cuenta?</h4>
            </div>
            <div class="modal-body">
                <p class="text-danger">{{ Auth::user()->Nom_user}} estas a punto de cerrar sesion :'c</p>
            </div>


            <div class="modal-footer">
          
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
 
                <a href="{{url('/logout')}}" style="border: none;" class="pull-right"><button class="btn btn-danger"><i class="glyphicon glyphicon-off"> </i> Salir de la Cuenta</button></a>
            </div>
        </div>
    </div>
    {{Form::Close()}}

</div>
                    
                @endif

               
                
            </ul>
        </div>
    </nav>
</header>
