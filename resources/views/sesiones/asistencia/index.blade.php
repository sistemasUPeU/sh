@extends ('layouts.app')

@section('main-content')

<div class="main-panel" >


            <div class="container-fluid">

 <div class="row">


                    <div class="col-lg-4 col-md-5">
                    <div class="col-md-8 col-md-offset-2  f-b">
<br>

 <div class="text-center form-group pull-left">
<a  data-target="#modal-crear-sesiones-sesiones" data-toggle="modal"><button class="btn btn-success"><i class="glyphicon glyphicon-list-alt"></i> Crear Sesiones</button></a>
</div>

<div class="text-center form-group pull-left">
<a  data-target="#modal-crear-fecha-sesiones" data-toggle="modal"><button class="btn btn-success "><i class="glyphicon glyphicon-calendar"></i> Crear Fechas</button></a>
</div>

 </div>
                                </div>
@include('sesiones.asistencia.crearSesiones')
@include('sesiones.asistencia.crearFecha')



                               <div class="responsive-calendar col-lg-8 col-md-12">

   <div class="card f-b content">
        <div class="controls">
          <br>
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Ant</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Sig</div></a>
        </div><hr/>
        <div class="day-headers ">
          <div class="day header">Lun</div>
          <div class="day header">Mar</div>
          <div class="day header">Mie</div>
          <div class="day header">Jue</div>
          <div class="day header">Vie</div>
          <div class="day header">Sab</div>
          <div class="day header">Dom</div>
        </div>
        <div class="days" data-group="days">

        </div>

</div>

</div>



</div>

</div>
</div>

<?php $now = new \DateTime();?>

@push ('scripts')

    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '<?php echo $now->format('Y-m'); ?>',
          events: {
             @foreach ($sesiones as $ses)

            "{{ $ses->Fecha}}": {"number":'{{ $ses->Nom_sesion}}', "url": "{{ $ses->idFecha}}"},

@endforeach

            }
        });
      });
    </script>

@endpush

@endsection