{!! Form::open(array('url'=>'evaluacion','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control border-input" name="searchText" placeholder="Buscar Familia / Madre / DNI / Codigo" value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}