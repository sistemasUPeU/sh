<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                     <a class="navbar-brand" href="#">Usuario conectado</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="" data-target="#modal-logout" data-toggle="modal" style="border: none;"><i class="ti-power-off" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesion"></i> Salir</a> </li>
                             </ul>
                </div>
            </div>
        </nav>


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
                <p class="text-danger">Estas a punto de cerrar sesion <i class="ti-face-sad"></i></p>
            </div>


            <div class="modal-footer">
          
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
 
                <a href="{{url('/logout')}}" style="border: none;" class="pull-right"><button class="btn btn-danger"><i class="glyphicon glyphicon-off"> </i> Salir de la Cuenta</button></a>
            </div>
        </div>
    </div> </div>
 
            