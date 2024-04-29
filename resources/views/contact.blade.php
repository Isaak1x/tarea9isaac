@extends('adminlte::page')

@section('title', 'Futbol')

@section('content_header')
    <h1>Futbol</h1>
@stop

@section('content')
    <h1>Futbol</h1>
    <p>Esta es la página hablaremos sobre la historia del futbol.</p>
    <img src="https://concepto.de/wp-content/uploads/2015/02/futbol-1-e1550783405750.jpg" alt="Descripción de la imagen" width="500">

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop