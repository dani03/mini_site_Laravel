@extends('base')
@section('title','a propos | ' . config('app.name'))
@section('contenu')
<img src="{{asset('images/parisien.png')}}" alt="" class="rounded-full h-32">
  <p class="mt-5">conçu par D.S avec laravel 8...</p>
<p>conçu avec du <span class="text-red-400">&hearts;</span>  par daniel samè</p>
  <p class="text-indigo-500 hover:text-indigo-700 underline"><a href="/"> retour à l'accueil</a></p> 
   
@endsection

