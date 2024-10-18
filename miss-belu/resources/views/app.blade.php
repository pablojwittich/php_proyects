<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Miss Belu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/11033/11033625.png">
        <style>
            *
            {
                border:0;
                padding:0;
                margin: 0;
            }
            body
            {
                background-color: #090013;
            }
            nav
            {
                background-color: #7d3c98 ;
                display: flex;
                justify-content: center;
                align-items: center;


            }
            a{
                color: white;
                margin-left: 1em;
                text-decoration: none;


            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <a href="{{route('index')}}">
                    <img src="https://cdn-icons-png.flaticon.com/128/11033/11033625.png" alt=""  />
                </a>
                <a href="{{route('index')}}"><h1>Miss Belu</h1></a>
                <a href="{{route('sobreMi')}}">Sobre mi</a>
                <a href="{{route('misCursos')}}">Mis cursos</a>
                <a href="{{route('contactame')}}">Contactame</a>
                <a href="">Nombre de Usuario</a>

            </nav>
        </header>
        <main>
        </main>
    </body>
</html>
