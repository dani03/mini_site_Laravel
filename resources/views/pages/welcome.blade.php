@extends('base')
@section('title', 'acceuil | ' . config('app.name'))

@section('contenu')
    <img src="/images/parisien.png" alt="parisien" class="rounded shadow-md h-32 mt-5">
    <h1 class=" text-2xl sm:text-3xl lg:text-7xl my-4 font-semibold text-indigo-700"> bonjour depuis paris...</h1>

    <h3 class="bjr text-lg text-gray-700">heure locale {{ date('h:i A d/m/Y')}}</h3> 
    <a href={{ route("vers-test") }}>page test.</a> </span> 
@endsection


