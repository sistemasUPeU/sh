@extends ('layouts.app')


@section('main-content')

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        <td>
            <center><a id="create" data-target="#modal-create" data-toggle="modal">
                    <button class="btn btn-success">Nuevo</button>
                </a></center>
        </td>
    </ul

    <div class="tab-content">


        <div id="home" class="tab-pane">
            <table class="table table-responsive">
                <thead>

                <tr>

                    <th>FECHA CONTROL PRENATAL</th>
                    <th>RESPONSABLE</th>
                    <th>opciones</th>
                </tr>
                </thead>
                @foreach ($cp as $cpn)

                    <tr>

                        <td>{{$cpn->Fecha_CPN}}</td>
                        <td>{{$cpn->Responsable_CPN}}</td>
                        <td><a data-target="#modal-listarMadre-{{$cpn->idCPN}}" data-toggle="modal"><button class="btn btn-success">Editar</button>
                            </a>
                            <a data-target="#delete-cpn" data-toggle="modal"><button class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span>delete</button></a></td></center>

                        </td>
                        </center>
                    </tr>
          @endforeach
            </table>


            .

    @include('evaluacion.madre.cpn')
    @include('evaluacion.madre.createCpn')
    @include('evaluacion.madre.ModalDelete')

@endsection