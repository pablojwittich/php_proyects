<?php include "app.php"; ?>
<head>
    <style>
        .container {
            background-color: #BFC0C1;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 2em;
        }
        h2 {
            text-align: center;
            color: #1a73e8;
            margin-bottom: 1.5rem;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin-bottom: 1rem;
            padding: 0.5rem;
            border: 1px solid #ddd;
            bordhazme un formulario sencillo tipo login solo con html y csser-radius: 4px;
            background-color: #EFEFEF;

        }
        .btn {
            background-color: #1a73e8;
            color: white;
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            margin-bottom: 1rem;
            margin: 0 auto;
        }
        .btn:hover {
            background-color: #1557b0;
        }
        .toggle-form {
            text-align: center;
            color: #1a73e8;
            cursor: pointer;
        }
        .form-section {
            display: none;
        }
        .form-section.active {
            display: block;
        }
        .php{
           text-align:center;
           color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="login-form" class="form-section active">
            <h2>Iniciar Sesión</h2>
            <div class="php">
                <?php include "../controllers/controller-login.php"; ?>
            </div>
            <!--<form method="post" action="index.php">
                <input name="Lemail" type="email" placeholder="Correo electrónico" >
                <input name="Lpass" type="password" placeholder="Contraseña" >
                <input name="iniciar-sesion" class="btn" type="submit" value="Iniciar sesión">
                </form>-->
                <form method="post" action="index.php">
                    <h5>Usuario</h5>
                        <input id="usuario" type="text" class="input" name="Luser">
                    <h5>Contraseña</h5>
                        <input type="password" id="input" class="input" name="Lpass">
                        <input name="iniciar-sesion" class="btn" type="submit" value="INICIAR SESION">
                </form>
                <a href="sign-in.php"><p class="toggle-form" onclick="toggleForm('signup-form')">¿No tienes cuenta? Regístrate</p></a>
        </div>
</body>
