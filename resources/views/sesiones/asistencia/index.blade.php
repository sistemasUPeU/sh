@extends ('layouts.app')

@section('main-content')

<div class="main-panel" >

        
            <div class="container-fluid">

 <div class="row">


                    <div class="col-lg-4 col-md-5  form-group">

                        <div class="card card-user f-b">
                                <div class="col-md-8 col-md-offset-2">
                               
<br>
    
          <div class="input-group date" data-provide="datepicker">
    <input type="date" class="form-control"><button class="btn btn-primary">Agregar</button>
   
</div>


<br>

                              </div> 
                            <div class="text-center">
                                <div class="row">
                                     
                            
                                </div>
                              </div>
                            </div>



                          </div>



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

<?php $now = new \DateTime(); ?>

@push ('scripts')

    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '<?php echo $now->format('Y-m'); ?>',
          events: {
            "<?php echo $now->format('Y-m-d'); ?>": {"number": 'Prevenir enfermedades', "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
        });
      });
    </script>

@endpush

@endsection