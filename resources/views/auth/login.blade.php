@extends('layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')

<body class="fondo-login">

  <div id="login">
  <form  action="{{ url('/login') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h1>Ingreso</h1>
    <input type="text" placeholder="Usuario" name="Nom_user">
    <input type="password" placeholder="Contraseña" name="password">
    <button type="submit">Ingresar</button>
  </form>
</div>
 
@include('layouts.partials.scripts_auth')
  

</body>

@endsection
