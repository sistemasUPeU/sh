<div class="modal fade modal-slide-in-right" aria-hidden="true"
     role="dialog" tabindex="-1" id="modal-editPersona-{{$trabajadores->idPersona}}">


    {{Form::Open(array('action'=>array('ProfileController@updatePeople',$trabajadores->idPersona),'method'=>'patch'))}}


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">{{$trabajadores->Nom_per.' '.$trabajadores->Apel_pater.' '.$trabajadores->Apel_mat}}</h4>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control border-input" name="Nom_per"
                                   value="{{$trabajadores->Nom_per}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" class="form-control border-input" name="Apel_pater"
                                   value="{{$trabajadores->Apel_pater}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Apellido Materno</label>
                            <input type="text" class="form-control border-input" name="Apel_mat"
                                   value="{{$trabajadores->Apel_mat}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>DNI</label>
                            <input type="text" class="form-control border-input" name="DNI"
                                   value="{{$trabajadores->DNI}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control border-input" name="Telefono"
                                   value="{{$trabajadores->Telefono}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" name="Direccion" class="form-control border-input"
                                   value="{{$trabajadores->Direccion}}">

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Distrito</label>
                            <select name="Distrito_idDistrito" class="form-control border-input">
                                @foreach($distritos as $dis)
                                    <option value="{{$dis->idDistrito}}">{{$dis->Nom_Dist}}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Sexo</label>
                            <select name="Sexo" class="form-control border-input">

                                <?php if ($trabajadores->Sexo == 'Masculino'): ?>
                                <option value="Masculino" selected="">Masculino</option>
                                <option value="Femenino">Femenino</option>

                                <?php elseif ($trabajadores->Sexo == 'Femenino'): ?>
                                <option value="Femenino" selected="">Femenino</option>
                                <option value="Masculino">Masculino</option>

                                <?php endif?>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input id="Fecha_nac" type="date" class="form-control border-input" name="Fecha_nac"
                                   value="{{$trabajadores->Fecha_nac}}">

                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>

            </div>
        </div>
        {{Form::Close()}}
    </div>
</div>