
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 8</title>
</head>
<body>
    <h1> bonjour depuis paris...</h1>
    <h3 class="bjr">heure locale {{ date('h:i A d/m/Y  ')}}</h3>

    <footer>
        <span>&copy; Copyright {{ date('Y')}} &middot; <a href="/apropos">A propos.</a> </span>
    </footer>
</body>
</html>