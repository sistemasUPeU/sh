@extends('layouts.app') @section('main-content')
<link rel="stylesheet" href="{{ URL::asset('css/page-style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/cards-style.css') }}" /> @foreach ($madre as $ma)

 @foreach ($nino as $ni)

 @if($ma->idMadre == $ni->Madre_idMadre)

<div class="card-box col-sm-5 col-md-6">
    <div class="card card-with-border">
        <div class="header">
            <div class="icon">
                <i class="pe-7s-glasses"></i>
            </div>
        </div>
        <div class="content text-center">
            <h4 class="title text-center">{{ $ni->Nino_nombre }}</h4>
            <p class="description">
                <dl class="dl-horizontal">
                    <dt>Apellidos y Nombre(s)</dt>
                    <dd>{{ $ni->Nino_apelma }} {{ $ni->Nino_apelpa}}, {{ $ni->Nino_nombre}}</dd>
                    <dt>Historial Clinico:</dt>
                    <dd>{{ $ni->Nino_HC}}</dd>
                    <dt>DNI:</dt>
                    <dd>{{ $ni->Nino_DNI}}</dd>
                    <dt>Fecha de Nacimiento</dt>
                    <dd>{{ $ni->Nino_fecha}}</dd>
                    <br>
                    <br>
                </dl>
            </p>
        </div>




<div class="row">

         <div class="content text-center">
            <h4 class="title text-center">Control Nutricional </h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Dx. Nutri</th>
                        <th scope="col">Observación</th>
                    </tr>
                </thead>
                <tbody>
                      @foreach ($cn as $c)
                      @if($c->Nino_idNino == $ni->idNino)

                    <tr>
                        <td>{{ $c->Fecha_CN}}</td>
                        <td>{{ $c->Edad}}</td>
                        <td>{{ $c->Peso}}</td>
                        <td>{{ $c->Talla}}</td>
                        <td>{{ $c->HB_HTO}}</td>
                        <td>{{ $c->Observacion}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>

</div>

    </div>



    <!-- end card -->
</div>

@endif
@endforeach
@endforeach

@endsection