<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-editUsuario-{{$trabajadores->idUsuario}}">


	{{Form::Open(array('action'=>array('UsuarioController@updateUsuario',$trabajadores->idUsuario),'method'=>'patch'))}}


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">USAS</h4>
			</div>

<div class="modal-body">
 
                                   

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Estado</label>
                                               <select name="Estado_user" class="form-control"> 
                          
                         <?php if ($trabajadores->Estado_user == 1): ?>
                          <option value="1" selected >Activo</option>
                          <option value="0">Desactivo</option>  

                          <?php elseif ($trabajadores->Estado_user == 0): ?>
                           <option value="0" selected >Desactivo</option>
                           <option value="1">Activo</option>

                          <?php endif ?> 
                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Rol de trabajador</label>
                                                <select name="Rol_idRol" class="form-control"> 
                      
                         @foreach($roles as $r)
                         <option value="{{$r->idRol}}">{{$r->Nom_rol}}</option>
                         @endforeach

                    </select>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre de Usuario</label>
                                                 <input id="Nom_user" type="text" class="form-control" name="Nom_user" value="{{$trabajadores->Nom_user}}">
                                              
                                            </div>
                                        </div>
                                    </div>

   <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
 
</div>          
</div>
{{Form::Close()}}
</div>

 