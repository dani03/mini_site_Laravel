@extends('base')
@section('title', 'acceuil | ' . config('app.name'))

@section('contenu')
    <h1> bonjour depuis paris...</h1>
    <h3 class="bjr">heure locale {{ date('h:i A d/m/Y')}}</h3> 
    <a href={{ route("vers-test") }}>page test.</a> </span>   
@endsection

@section('foot')
    &middot;  <a href={{ route("vers-about") }}>A propos.</a> </span>    
@stop
