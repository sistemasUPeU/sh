@extends('layouts.app')

@section('htmlheader_title')
    Listar-Familia
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de todas las familias </div>

                    <div class="panel-body">
                            <div class="row"><div class="col-sm-9">
                                    <div class="dataTables_length" id="example1_length">
                                        <label> <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>

                                            </select> </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Buscar Familia ..." class="form-control">
                                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-success btn-flat">Buscar</button>
                          </span>
                                        </div>
                                    </form>
                            </div>

                        <table id="example2" class="table table-bordered  table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Familia</th>
                                <th>paterno</th>
                                <th>materno</th>
                                <th>nombre</th>
                                <th>direccion</th>
                                <th>HC</th>
                                <th>Dni</th>
                                <th>estado</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($familia as $usu)
                            <tr>
                                <td>{{ $usu->idCarnetFamiliar}}</td>
                                <td>{{ $usu->num_familiabeneficiada}}</td>
                                <td>{{ $usu->familia}}</td>
                                <td>{{ $usu->ape_paterno}}</td>
                                <td>{{ $usu->ape_materno}}</td>
                                <td>{{ $usu->nombres}}</td>
                                <td>{{ $usu->direccion}}</td>
                                <td>{{ $usu->historial_cli}}</td>
                                <td>{{ $usu->dni}}</td>
                                <td>{{ $usu->estado}}</td>


                                <td>
                                    <p><span class="label label-danger">Inactivo</span></p>
                                </td>
                                <td>
                                    <a href="{{ url('Carnet-Familiar') }}"><button class="btn btn-primary btn-xs">Carnet-Familiar</button></a> <!--  -->

                                </td>
                            </tr>
                            @endforeach





                        </table>
                    </div>
                    <!-- <a href="" data-target="#modal-delete-" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> <!-- /.box-body                     hasta aqui -->

                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection