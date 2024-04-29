@extends('adminlte::page')

@section('title', 'Messi')

@section('content_header')
    <h1>Messi</h1>
@stop

@section('content')
<p>Welcome to Messi.</p>
    <p>Esta es la página de Messi, el mejor jugador de la historia.</p>
    <img src="https://www.infobae.com/new-resizer/JWZoswjYiGPxXJNv007ZqTAjVWw=/filters:format(webp):quality(85)/arc-anglerfish-arc2-prod-infobae.s3.amazonaws.com/public/UQTKZE7HAFHQDF5HNMDPOFKMLE.jpg" alt="Descripción de la imagen" width="500">
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop