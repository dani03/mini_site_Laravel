@extends('base')
@section('title','a propos | ' . config('app.name'))
@section('contenu')
<img src="{{asset('images/parisien.png')}}" alt="">
  <p>conçu par D.S avec laravel 8...</p>

  <p><a href="/"> retour a l'accueil</a></p>  
@endsection

