@extends('layouts.app')

@section('htmlheader_title')
    Carnet-Familiar
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h5>Sys-<b><a href=""> Carnet Familiar </a></b></h5> </div>
                    <div class="panel-body">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Familia y vivienda saludable </h3>
                            </div>
                            <div class="box-body">
                                <!-- Split button -->
                                <p>Evaluacion de la familia <h> <a> Castro Vasquez</a></h></p>

                                <div class="margin">
                                    <div class="btn-group">
                                        <button
                                                type="button"
                                                class="btn btn-default "
                                                href="Modals.ModalEvaluarMadre"
                                                data-toggle="modal"
                                                data-target="#carnetfamiliar">
                                                Carnet Familiar</button>


                                    </div>
                                    <div class="btn-group">
                                        <button
                                                type="button"
                                                class="btn btn-primary "
                                                data-toggle="modal"
                                                data-target="#favoritesModal">
                                                Evaluacion de la Madre
                                        </button>


                                    </div>
                                    <div class="btn-group">
                                        <button
                                                type="button"
                                                class="btn btn-danger "
                                                data-toggle="modal"
                                                data-target="#favoritesModal">
                                                Evaluacion del niño
                                        </button>

                                    </div>
                                    <div class="btn-group">
                                        <button
                                                ttype="button"
                                                class="btn btn-success "
                                                data-toggle="modal"
                                                data-target="#favoritesModal">
                                                Asistencia a Sesiones
                                        </button>

                                    </div>
                                    <div class="btn-group">
                                        <button
                                                type="button"
                                                class="btn btn-warning "
                                                data-toggle="modal"
                                                data-target="#favoritesModal">
                                                Evaluacion Final de la Familia
                                        </button>

                                    </div>

                                </div>





</div>
                            <!-- Modals  -->



                    </div>

                </div>

            </div>

            </div>
        </div>
    </div>
@endsection

