@extends ('layouts.app')

@section('main-content')
    <div class="col-md-pull-12">
        @if(session('msg'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="text-center lead">{{session('msg')}}</p>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="card">

                <div class="author col-md-8 col-md-offset-2">
                    <div class="content">

                        <img class="img-responsive" src="{{asset('/img/avatar-user.png')}}"/>

                    </div>
                </div>

                <div class="text-center">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="form-group">
                                <br><br>
                                <label>Usuario</label>
                                <input type="text" class="form-control text-center" value="{{$trabajadores->Nom_user}}"
                                       disabled>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <br><br>
                                <label>Rol</label>
                                <input type="text" class="form-control text-center" value="{{$trabajadores->Nom_rol}}"
                                       disabled>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <a data-target="#modal-editPass" data-toggle="modal">
                            <button class="btn btn-success">Editar usuario</button>
                        </a>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-8">
            <div class="card">
                <div class="col-md-6 col-md-offset-4">
                    <h1 class="text-left">Datos Personales</h1><br>
                </div>
                <div class="content">

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>DNI</label>
                                <input type="text" class="form-control" value="{{$trabajadores->DNI}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Nom_per}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Telefono}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Apel_pater}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Apel_mat}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Direccion</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Direccion}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Distrito</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Nom_Dist}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sexo</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Sexo}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha de nacimiento A-M-D</label>
                                <input type="text" class="form-control" value="{{$trabajadores->Fecha_nac}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <br><a data-target="#modal-editPersona-{{$trabajadores->idPersona}}" data-toggle="modal">
                            <button class="btn btn-success">Editar datos de {{$trabajadores->Nom_per}} </button>
                        </a>
                    </div>
                </div>
            </div>
            @include('seguridad.UserSafety.editUser')
            @include('seguridad.UserSafety.editPass')
        </div>

    </div>

    </div>
@endsection