<!--

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$trabajadores->idPersona}}">


	{{Form::Open(array('action'=>array('UsuarioController@editPersona',$trabajadores->idPersona),'method'=>'delete'))}}




	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Hans Alfredo Exebio Fernandez</h4>
			</div>
			<div class="modal-body">

 <div class="">
                        <div class="card" style="background-color: white;">
                            <div class="col-md-6 col-md-offset-4">
                            </div>
                            <div class="content">
                             
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>DNI</label>
                                                <input type="text" class="form-control" value="{{$trabajadores->DNI}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                 <input type="text" class="form-control"  value="{{$trabajadores->Nom_per}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label >Telefono</label>
                                                <input type="text" class="form-control" value="{{$trabajadores->Telefono}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellido Paterno</label>
                                               <input type="text" class="form-control" value="{{$trabajadores->Apel_pater}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellido Materno</label>
                                                <input type="text" class="form-control"  value="{{$trabajadores->Apel_mat}}" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Direccion</label>
                                                 <input type="text" class="form-control border-input" value="{{$trabajadores->Direccion}}">
                                              
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Distrito</label>
                                                 <input type="text" class="form-control" value="{{$trabajadores->Nom_Dist}}">
                                              
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <input type="text" class="form-control"  value="{{$trabajadores->Sexo}}">
                                              
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fecha de nacimiento</label>
                                                 <input type="text" class="form-control"  value="{{$trabajadores->Fecha_nac}}">
                                              
                                            </div>
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

-->