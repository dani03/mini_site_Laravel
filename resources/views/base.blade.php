
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', config('app.name'))</title>
</head>
<body>
   @yield('contenu')
    {{config("app.name")}}
    <footer>
        <span>&copy; Copyright {{ date('Y')}}  @yield('foot') </span>
    </footer>
</body>
</html>