@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Bienvenido </div>


					<div class="panel-body">
						{{ trans('Estas Conectado') }}

						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection