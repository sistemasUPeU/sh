<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-crear-sesiones-sesiones">


	{{Form::Open(array('action'=>array('SesionesController@crearSesiones'),'method'=>'POST'))}}


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Crear Sesiones</h4>
			</div>

<div class="modal-body">
 
           <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tipo de sesion</label>
                                                 

                                                <select name="Tipo_Sesiones_idTipo_Sesiones" class="form-control border-input"> 
                      
                         @foreach($tipo as $t)
                         <option value="{{$t->idTipo_Sesiones}}">{{$t->Nom_tipo_ses}}</option>
                         @endforeach

                    </select>


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre de sesion</label>
                                              <input type="text" name="Nom_sesion" class="form-control border-input">
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
