<?php include "app.php"; ?>
<head>
    <style>
        .container {
            background-color: #BFC0C1;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top:2em;
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
        button {
            background-color: #1a73e8;
            color: white;
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .toggle-form{
          text-align: center;
          color: #1a73e8;
          cursor: pointer;
        }
    </style>
</head>
<body>
    <section class="container">
        <div id="signup-form" class="form-section">
            <h2>Crear Cuenta</h2>

            <form method="post" action="index.php">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="close"
                    ></button>
                    <p>Registro logrado con éxito!</p>
                </div>
                <input name="Ruser" type="text" placeholder="Nombre completo" required>
                <input name="Remail" type="email" placeholder="Correo electrónico" required>
                <input name="Rpass" type="password" placeholder="Contraseña" required>
                <button name="registrarse" href="sing-in.php" type="submit">Registrarse</button>
            </form>
            <a href="login.php"><p class="toggle-form" onclick="toggleForm('login-form')">¿Ya tienes cuenta? Inicia sesión</p></a>
        </div>
    </section>
</body>
