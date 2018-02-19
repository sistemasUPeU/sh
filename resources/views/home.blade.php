@extends('layouts.app') @section('htmlheader_title') Home @endsection @section('main-content')


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css/material-bootstrap-wizard.css') }}" />
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    
                    {{Form::Open(array('action'=>array('FamiliaController@store'),'method'=>'POST'))}}
                      {{Form::token()}}
                    <div class="wizard-header">
                        <h3 class="wizard-title">
                                       Carnet Familiar
                                    </h3>
                    </div>
                    <div class="wizard-navigation">
                        <ul>
                            <li><a href="#about" data-toggle="tab">Datos Generales</a></li>
                            <li><a href="#account" data-toggle="tab">Responsable de Familia</a></li>
                            <li><a href="#madre" data-toggle="tab">Datos de la Madre</a></li>
                            <li><a href="#address" data-toggle="tab">Datos Clinico Madre</a></li>
                            <li><a href="#niño" data-toggle="tab">Datos del Niño</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane" id="about">
                            <div class="row">
                                <h4 class="info-text"> Comencemos con la información básica </h4>
                                <div class="col-sm-4 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture" class="hide">
                                            <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                            <input type="file" id="wizard-picture">
                                        </div>
                                        <h6>Seleccione Imagen</h6>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Codigo de Familia <small>(requerido)</small></label>
                                            <input id="Codigo_fam" name="Codigo_fam" type="Number" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                        <i class="material-icons">record_voice_over</i>
                                                    </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre de Familia <small>(requerido)</small></label>
                                            <input id="Nom_fam" name="Nom_fam" type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="account">
                            <div class="row">
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos y Nombre (s)</label>
                                        <input type="text" class="form-control" name="Respons_fam" id="Respons_fam">
                                    </div>
                                </div>
        
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Caracteristicas</label>
                                        <select name="Tipo_Familia_idTipo_Familia" class="form-control" id="Tipo_Familia_idTipo_Familia">
                                            <option disabled="" selected=""></option>
                                            <option value="1"> Nueva </option>
                                            <option value="2"> Continuante </option>
                                            <option value="3"> Reingresante </option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Modo de Captacion</label>
                                        <select name="Modo_Captacion_idModo_Captacion" class="form-control" id="Modo_Captacion_idModo_Captacion" >
                                            <option disabled="" selected=""></option>
                                            <option value="1"> Visita Domiciliaria </option>
                                            <option value="2"> Hospital </option>
                                            <option value="3"> Campaña de Salud </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="form-group label-floating ">
                                        <label class="control-label" for="Distrito_idDistrito" "> Distrito </label>
                                        <select id="distrito_idDistrito" class="form-control" name="distrito_idDistrito">
                                            <option disabled="" selected=""></option>
                                            <option value="1">Chosica</option>
                                            <option value="2">Lurigancho</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="address">
                            <div class="selector-page">
                                <div class="selector" id="box">
                                    <ul>
                                        <li>
                                            <h5>Gestante</h5>
                                            <label class="control-label">Inicio</label>
                                            <select name="Gestante_Inicio" class="form-control" id="Gestante_Inicio">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="0"> No </option>
                                            </select>
                                            <input type="hidden" class="form-control" name="Planificacion_Familiar_idPlanificacion_Familiar" id="Planificacion_Familiar_idPlanificacion_Familiar" value="1">
                                            <br>
                                            <br>
                                            <br>
                                        </li>
                                        <li>
                                            <h5>Planificacion Familiar</h5>
                                            <label class="control-label">Inicio</label>
                                            <select name="" class="form-control" id="">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="0"> No </option>
                                            </select>
                                            <label class="control-label">Seleccione</label>
                                            <select name="Planificacion_Familiar_idPlanificacion_Familiar" class="form-control">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Natural </option>
                                                <option value="2"> Condon </option>
                                                <option value="3"> Pildoras </option>
                                                <option value="4"> Inyectables </option>
                                                <option value="5"> T de Cobre </option>
                                                <option value="6"> Ligadura de Trompa </option>
                                                <option value="7"> Vasectomia </option>
                                            </select>
                                        </li>
                                        <li>
                                            <h5>Control Prenatal</h5>
                                            <label class="control-label">Antes del Programa</label>
                                            <select name="CPN_Antes" class="form-control" id="CPN_Antes">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="0"> No </option>
                                            </select>
                                            <input type="number" class="form-control" name="Cantidad_CPN_Antes" placeholder="Cantidad" id="Cantidad_CPN_Antes">
                                            <br>
                                        </li>
                                        <li>
                                            <h5>Papanicolau</h5>
                                            <label class="control-label">Antes del Programa</label>
                                            <select name="Papanicolau_Antes" class="form-control" id="Papanicolau_Antes">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="0"> No </option>
                                            </select>
                                            <label class="control-label">Obtuvo Resultado</label>
                                            <select name="" class="form-control">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="2"> No </option>
                                            </select>
                                        </li>
                                        <li>
                                            <h5>Examen Mamas</h5>
                                            <label class="control-label">Antes del Programa</label>
                                            <select name="Examen_Mamas_Antes" class="form-control" id="Examen_Mamas_Antes">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="0"> No </option>
                                            </select>
                                            <label class="control-label">Sospechoso</label>
                                            <select name="" class="form-control">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="2"> No </option>
                                            </select>
                                        </li>
                                        <li>
                                            <h5>V. Antitetanica</h5>
                                            <label class="control-label">Antes del Programa</label>
                                            <select name="Vacuna_Antitetanica_Antes" class="form-control" id="Vacuna_Antitetanica_Antes">
                                                <option disabled="" selected=""></option>
                                                <option value="1"> Si </option>
                                                <option value="2"> No </option>
                                            </select>
                                            <input type="number" class="form-control" name="Cantidad_Vacunas_Antitetanicas" placeholder="Cantidad">
                                            <br>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="madre">
                            <div class="row">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellido Paterno</label>
                                        <input type="text" class="form-control" name="Madre_apel_pa" id="Madre_apel_pa">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos Materno</label>
                                        <input type="text" class="form-control" name="Madre_apel_ma" id="Madre_apel_ma" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input type="date" class="form-control" name="Madre_fecha" id="Madre_fecha" >
                                    </div>
                                </div>
                                  <div class="col-sm-7 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre (s)</label>
                                        <input type="text" class="form-control" name="Madre_nombre" id="Madre_nombre" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label"> DNI </label>
                                        <input type="number" class="form-control" name="Madre_DNI" id="Madre_DNI">
                                    </div>
                                </div>
                                <div class="col-sm-7 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Direccion</label>
                                        <input type="text" class="form-control" id="Madre_direccion" name="Madre_direccion">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label"> Telefono </label>
                                        <input type="number" class="form-control" name="Madre_telf" id="Madre_telf">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="niño" >
                            <div id="sections">
                                <div class="section" style="">
                                    <fieldset>
                                        <p>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" >Historia Clinica</label>
                                                    <input type="text" class="form-control" name="Nino_HC[]">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">DNI</label>
                                                    <input type="number" class="form-control" name="Nino_DNI[]">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Sexo</label>
                                              <select name="Nino_sexo[]" class="form-control">
                                                <option disabled="" selected=""></option>
                                                <option value="Masculino"> Masculino </option>
                                                <option value="Femenino"> Femenino </option>
                                            </select>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Apellido Paterno</label>
                                                    <input type="text" class="form-control" name="Nino_apelpa[]">
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Apellido Materno</label>
                                                    <input type="text" class="form-control" name="Nino_apelma[]" >
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nombre (s)</label>
                                                    <input type="text" class="form-control" name="Nino_nombre[]">
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input type="date" class="form-control" name="Nino_fecha[]">
                                                </div>
                                            </div>
                                            
                                        </p>
                                        <p><a href="#" class='remove'><i class="material-icons">remove_circle_outline</i></a></p>
                                        <p><a href="#" class='addsection'> <i class="material-icons">person_add</i></a></p>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">

                                <input type='button' class='btn btn-next btn-fill btn-default btn-wd' name='next' value='Siguiente' />
                                <input name="_token" value="{{ csrf_token() }}" type="hidden" />
                                <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finalizar' />
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        {{Form::Close()}}
                    </div>
                </div>
                <!-- wizard container -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!--  big container -->
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/material-bootstrap-wizard.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.bootstrap.js') }}"></script>
    <script type="text/javascript">
    var template = $('#sections .section:first').clone();
    var sectionsCount = 1;
    $('body').on('click', '.addsection', function() {
        sectionsCount++;
        var section = template.clone().find(':input').each(function() {
                var newId = this.id + sectionsCount;
                $(this).prev().attr('for', newId);
                this.id = newId;
            }).end()
            .appendTo('#sections');
        return false;
    });

    $('#sections').on('click', '.remove', function() {
        $(this).parent().fadeOut(300, function() {
            $(this).parent().parent().empty();
            return false;
        });
        return false;

        $('.selector ul li').click(function() {
            $('.selector ul li').removeClass('selected');
            $(this).addClass('selected');
        });

    });

    </script>
    @endsection