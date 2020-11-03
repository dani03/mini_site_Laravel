
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', config('app.name'))</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class=" py-8 flex flex-col justify-between items-center min-h-screen ">
    <main role="main" class="items-center flex flex-col justify-center">
        @yield('contenu')
    </main>
   
    <footer>
        <p class="text-gray-500">
            &copy; Copyright {{ date('Y')}}
               @if (!Route::is('vers-about'))
                   <a  class="text-indigo-400 hover:text-indigo-600 underline" href="{{ Route('vers-about')}}">a propos</a>    
               @endif
        </p>
    </footer>
</body>
</html>