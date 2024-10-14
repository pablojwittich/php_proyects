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
        body{
            background-color: #EFEFEF;
        }
        nav{
            display: table;
            height:100px;
            padding-left:3em;
            padding-right:3em;
            background-color: #BFC0C1;
            margin: 0 auto;
            width: 100%;
        }
        a{
            color:black;
            text-decoration: none;
            display: table-cell;
            vertical-align: middle;
            padding-left: 1em;
            padding-right: 1em;
        }
        .logo{
            width: 4em;
            height: 4em;
            border-radius: 50px;
        }
        .index{
            padding-right: 30em;
        }
        .inicio{

        }
    </style>
</head>
<body>
    <section>
        <header>
            <nav>
                <a href="{{ route('index') }}"><img class="logo" src="https://media-eze1-1.cdn.whatsapp.net/v/t61.24694-24/95089700_586177075347204_1598701341885009064_n.jpg?ccb=11-4&oh=01_Q5AaIEC4zEGDEYVIWSWq-YJS3u_seetWf0qb-PC9jOQVb2_V&oe=6719D4B1&_nc_sid=5e03e0&_nc_cat=108"></a>
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
