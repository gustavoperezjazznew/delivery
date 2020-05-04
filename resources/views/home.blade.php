@extends('layout')

@section('contenido')

<!--about-->
 @include('acercade')
<!--/about-->

<!-- event -->
@include('verplato')
<!--/ event -->

<!-- menu -->
@include('menu')
<!--/ menu -->

<!-- contact -->
 @include('contacto')
<!-- / contact -->

 @endsection 

  @section('menuvista')
  <script src="{{ asset('js/menuvista.js') }}"></script>
  @endsection 
