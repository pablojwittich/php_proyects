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
        body {
            width: 90%;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }
        nav{
            background-color: #1f5cc5;
            margin-top: 1em;
            border-radius: 40px;
            padding-top: 1em;
            pading-bottom: 1em;
            display: flex;
            align-items: center;
        }
        a{
            padding-right: 1em;
            padding-left: 1em;
            padding-bottom: 1em;
            color: white;
            line-height: 1.5em;
            vertical-align: center;
        }
        .logo{
            border-radius: 50%;
            width: 2em;
            height: 2em;
        }
        .index{
            padding-right:33em;
            font-style: block;
        }
        .inicio{
            background-color:#f2f2f2;
            color:#131f26;
            border-radius: 50px;
            vertical-align:center;
            line-height:1.5em;
            margin-bottom: 0.3em;
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
