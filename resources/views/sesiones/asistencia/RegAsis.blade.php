<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-RegAsis-{{$au->idFamilia}}" style="position: absolute;top: -40px;">

{{Form::Open(array('action'=>array('SesionesController@RegAsis'),'method'=>'POST'))}}

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Marcar Asistencia</h4>
            </div>

<div class="modal-body">
         <input type="text" name="Familia_idFamilia" value="{{$au->idFamilia}}" hidden>
          <input type="text" name="Fecha_idFecha"  value="{{$fechas->idFecha}}" hidden>
         <div class="row">
               <label class="col-md-12">Estas seguro de marcar como <b style="color: blue">Asistencia</b> a la familia <b style="color: black">{{$au->Nom_fam}}</b> ?</label>
                                        
                                         </div>




            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>

</div>
</div>

</div>
{{Form::Close()}}
</div>