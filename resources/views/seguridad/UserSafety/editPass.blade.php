<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
     id="modal-editPass">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center"><span style='color:green'>{{ucwords(Auth::user()->Nom_user)}}</span> actualiza tu Contraseña</h4>
            </div>

            <div class="modal-body">


                {{ Form::Open(array('action'=>array('ProfileController@updatePassword'),'method'=>'POST'))}}

                <div class="container">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="example-text-input">Ingrese Contraseña Actual</label>
                            <input class="form-control" type="password" name="oldPassword" id="oldPassword">
                            <span style="color:white">{{ $errors->first('old_password') }}</span>
                            <br>

                            <label for="example-text-input">Ingrese Nueva Contraseña</label>
                            <input class="form-control" type="password" name="newPassword" id="newPassword">
                            <span style="color:white">{{ $errors->first('newPassword') }}</span>
                            <br>

                            <div align="right">
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>

        </div>
    </div>
    <script src="{{ asset('/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('/js/validate-pass.js') }}"></script>