<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('Menu') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('Inicio') }}</span></a></li>

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Familia') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Listar-Familia') }}">Nueva Familia</a></li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Reportes') }}</a> </li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Sesiones') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Asistencia') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Reportes') }}</a> </li>
                   

                </ul>

            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Historial Clínico') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Control Nutricional') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Problemas Salud') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' CPN') }}</a> </li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' Reportes') }}</a> </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Evaluación') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Listar-Familia') }}"></a></li>
                    <li><a href="{{ url('Nueva-Familia') }}">{{ trans(' ') }}</a> </li>


                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
