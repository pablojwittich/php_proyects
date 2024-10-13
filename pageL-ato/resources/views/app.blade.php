<!Doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>A tus ordenes!</title>
    <style>
        *{
            border: 0;
            margin: 0;
            padding: 0;
        }
        nav{
            padding-botom: 2em;
            padding-top: 2em;
            background-color: blue;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <section>
        <header>
            <nav>
                <a href="{{ route('index') }}"><img class="logo" src="/img/logo_ca.png"/></a>
                <a class="index"  href="{{route('index')}}">A tus ordenes!</a>
                <a href="{{route('quienes')}}">Quiénes somos</a>
                <a href="{{route('vision')}}">Visión</a>
                <a href="{{('mision')}}">Misión</a>
                <a class="inicio" href="{{route('inicio')}}">Iniciar Sesión</a>
            </nav>
        </header>
    </section>
</body>
</html>
