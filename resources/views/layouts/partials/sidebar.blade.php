<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/avatar-user.png')}}"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->Nom_user}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
 

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('Menu') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class="glyphicon glyphicon-home"></i><span>{{ trans('Inicio') }}</span></a></li>

            <li class="treeview">
                <a href="#" ><i class="glyphicon glyphicon-user"></i> <span>{{ trans('Familia') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Listar-Familia') }}">{{ trans('Nueva Familia') }}</a></li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Reportes') }}</a></li>


                </ul>
            </li>

@if(Auth::user()->Rol_idRol == 3)
 
            <li class="treeview">
                <a href="#" ><i class="glyphicon glyphicon-user"></i> <span>{{ trans('Seguridad') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('seguridad/usuario') }}">{{ trans('Trabajadores') }}</a></li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans('Desactivos') }}</a></li>


                </ul>
            </li>

@endif

            <li class="treeview">
                <a href="#" ><i class="glyphicon glyphicon-list-alt" ></i> <span>{{ trans('Sesiones') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Asistencia') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Reportes') }}</a> </li>
                   

                </ul>

            </li>
            <li class="treeview">
                <a href="#" ><i class="glyphicon glyphicon-edit"></i><span>{{ trans('Historial Clínico')}}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Control Nutricional') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Problemas Salud') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' CPN') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Reportes') }}</a> </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#" ><i class="glyphicon glyphicon-calendar"></i> <span>{{ trans('Evaluación') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Listar-Familia') }}"></a></li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' ') }}</a> </li>


                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
