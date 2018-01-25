<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-crear-fecha-sesiones">


	{{Form::Open(array('action'=>array('SesionesController@crearFecha'),'method'=>'POST'))}}


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Crear Fechas</h4>
			</div>

<div class="modal-body">
 
           <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input type="date" name="Fecha" class="form-control border-input">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tipo de sesion</label>
                                               <select name="Sesiones_idSesiones" class="form-control border-input"> 
                      
                         @foreach($nombresesion as $n)
                         <option value="{{$n->idSesiones}}">{{$n->Nom_sesion}}</option>
                         @endforeach

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
{{Form::Close()}}
</div>
</div>
