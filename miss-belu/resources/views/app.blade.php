<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Miss Belu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            *
            {
                border:0;
                padding:0;
                margin: 0;
            }
            nav
            {
                background-color: #7d3c98 ;
            }
            body
            {
                background-color: #090013;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <a href="{{route('index')}}">
                    <img src="../img/logo_miss_belu.png" alt="">
                </a>
                <a href="{{route('index')}}"><h1>Miss Belu</h1></a>
                <a href="{{route('sobreMi')}}">Sobre mi</a>
                <a href="{{route('misCursos')}}">Mis cursos</a>
                <a href="{{route('contactame')}}">Contactame</a>
            </nav>
        </header>
        <main>
        </main>
    </body>
</html>
