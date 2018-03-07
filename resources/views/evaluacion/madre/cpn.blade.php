<div class="modal fade modal-slide-in-right" aria-hidden="true"
     role="dialog" tabindex="-1" id="modal-listarMadre-{{$cpn->idCPN}}">

    {{Form::Open(array('action'=>array('MadreController@updatecpn',$cpn->idCPN),'method'=>'patch'))}}


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Editar CPN</h4>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fecha </label>
                            <input type="date" name="Fecha_CPN" value="{{$cpn->Fecha_CPN}}" class="form-control"
                                   id="fecha">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Responsable</label>
                            <input type="text" name="Responsable_CPN" value="{{$cpn->Responsable_CPN}}"
                                   class="form-control" id="fecha">

                            <input hidden name="Madre_idMadre" value="{{$cpn->Madre_idMadre}}">
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


