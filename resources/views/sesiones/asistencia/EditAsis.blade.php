<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-EditAsis-{{$au->idFamilia}}" style="position: absolute;top: -40px;">

@foreach($asistencia as $asis)
@if($au->idFamilia == $asis->Familia_idFamilia && $asis->Estado_asistencia == 1)

{{Form::Open(array('action'=>array('SesionesController@EditAsis',$asis->idAsistencia),'method'=>'patch'))}}

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Editar Asistencia {{$asis->idAsistencia}}</h4>
            </div>

<div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Familia</label>
                                                <input type="text" name="Familia_idFamilia" value="{{$au->idFamilia}}" disabled hidden>
                                                <input type="text" name="Fecha_idFecha"  value="{{$fechas->idFecha}}" hidden> 
                                                <input type="text" class="form-control border-input" value="{{$au->Nom_fam}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Asistencia</label>
                                                <select name="Estado_asistencia" class="form-control border-input"> 
                      
                         <option value="1" selected="">Asistio</option>
                         <option value="0">Falto</option> 
                    </select>
                                            </div>
                                        </div>
                                         </div>




            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
           

</div>
</div>

</div>
{{Form::Close()}}
@endif
@endforeach
</div>