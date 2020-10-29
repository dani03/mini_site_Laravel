@extends('base')
@section('title', 'acceuil | ' . config('app.name'))

@section('contenu')
    <h1> bonjour depuis paris...</h1>
    <h3 class="bjr">heure locale {{ date('h:i A d/m/Y')}}</h3>   
@endsection

@section('foot')
    &middot;  <a href="/apropos">A propos.</a> </span>    
@stop
