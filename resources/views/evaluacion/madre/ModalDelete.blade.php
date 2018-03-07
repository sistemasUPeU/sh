<!-- Modal -->
<div class="modal" id="delete-cpn" tabindex="-1" role="dialog"

 aria-labelledby="myModalLabel">
  {{Form::Open(array('action'=>array('MadreController@destroy',$cpn->idCPN),'method'=>'delete'))}}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">seguro de eliminar SR(A): {{$cpn->Responsable_CPN}}</h4>
      </div>
      <form  method="post" class="modal1">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<center><strong><p class="text-center">
					Estás seguro que quieres eliminar los siguientes valores?
				</p></strong>
       <strong> <td > Responsable: {{$cpn->Responsable_CPN}}</td><bR>
      

        <td> Fecha: {{$cpn->Fecha_CPN}}</td></center><br>
        </div>
        </strong>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" id="btndelete" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>


</script>