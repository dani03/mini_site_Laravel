
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 8</title>
</head>
<body>
   @yield('contenu')

    <footer>
        <span>&copy; Copyright {{ date('Y')}}  @yield('foot') </span>
    </footer>
</body>
</html>