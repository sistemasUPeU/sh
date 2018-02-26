@extends('layouts.app') @section('htmlheader_title') Carnet-Familiar @endsection @section('main-content')
<link rel="stylesheet" href="{{ URL::asset('css/page-style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/cards-style.css') }}" />
@foreach ($res as $r)
<div class="card-box col-sm-5 col-md-6">
    <div class="card card-with-border">
        <div class="header">
            <div class="icon">
                <i class="pe-7s-glasses"></i>
            </div>
        </div>
        <div class="content text-center">
            <h4 class="title text-center">{{ $r->Nino_nombre }}</h4>
            <p class="description">
                <dl class="dl-horizontal">
                    <dt>Apellidos y Nombre(s)</dt>
                    <dd>{{ $r->Nino_apelma }} {{ $r->Nino_apelpa}}, {{ $r->Nino_nombre}}</dd>
                    <dt>Historial Clinico:</dt>
                    <dd>{{ $r->Nino_HC}}</dd>
                    <dt>DNI:</dt>
                    <dd>{{ $r->Nino_DNI}}</dd>
                    <dt>Fecha de Nacimiento</dt>
                    <dd>{{ $r->Nino_fecha}}</dd>
                    <br>
                    <br> 
                </dl>
            </p>
        </div>
    </div>
    <!-- end card -->
</div>
@endforeach 
@foreach ($res as $r)
<div class="card-box col-sm-5 col-md-6">
    <div class="card card-with-border">
        <div class="header">
            <div class="icon">
                <i class="pe-7s-glasses"></i>
            </div>
        </div>
        <div class="content text-center">
            <h4 class="title text-center">Control Nutricional</h4>
            <p class="description">
                <dl class="dl-horizontal">
                    <dt>Nombres:</dt>
                    <dd>{{ $r->Nino_nombre}}</dd>
                    <dt>Historial Clinico:</dt>
                    <dd>{{ $r->Nino_HC}}</dd>
                    <dt>DNI:</dt>
                    <dd>{{ $r->Nino_DNI}}</dd>
                    <br>
                    <br> 
                </dl>
            </p>
        </div>
    </div>
    <!-- end card -->
</div>
@endforeach 
@endsection