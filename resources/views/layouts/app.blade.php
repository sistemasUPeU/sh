<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show


<body >
 
<div class="wrapper">

@include('layouts.partials.sidebar')

<div class="main-panel">
        @include('layouts.partials.mainheader')

 <div class="content">
            <div class="container-fluid">

@yield('main-content')
            </div>
        </div>

</div>
</div>
<!-- ./wrapper -->
    @include('layouts.partials.scripts')
    @stack('scripts')    
    
@show

</body>
</html>
