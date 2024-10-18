<?php include "app.php"; ?>
<head>
    <style>
        .container {
            background-color: #BFC0C1;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 30em;
            height: 36em;
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
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border: 1px solid #ddd;
            background-color: #EFEFEF;

        }
        .regis-btn {
            background-color: #1a73e8;
            color: white;
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        .regis-btn:hover{
          background-color: #1557b0;
        }
        .toggle-form{
          text-align: center;
          color: #1a73e8;
          cursor: pointer;
        }
        .link-login{
          display: flex;
          justify-content: center;
          margin: 0 auto;
          margin-top: 1em;
          margin-bottom: 1em;
        }
        .mostrarContrasena{
          margin-top:0.2em;
          margin-bottom:0.3em;
        }
    </style>
</head>
<body>
    <section class="container">
        <div id="signup-form" class="form-section">
            <h2>Crear Cuenta</h2>

            <form method="post" action="index.php">
                <section class="alert alert-success alert-dismissible fade show" role="alert">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="close"
                    ></button>
                    <p>Registro logrado con éxito!</p>
                </section>
                <section class="row g-3">
                  <div class="col">
                    <h5>Nombre</h5>
                    <input type="text" class="form-control"  aria-label="Nombre">
                  </div>
                  <div class="col">
                    <h5>Apellido</h5>
                    <input type="text" class="form-control" aria-label="Apellido">
                  </div>
                </section>
                <section class="col">
                  <h5>Correo electronico</h5>
                    <input class="form-control" name="Regis-email" type="email" required>
                </section>
                <section class="row g-3">
                  <div class="col">
                    <h5>Contraseña</h5>
                    <input class="form-control" id="mostrarContrasena" name="Regis-contraseña" type="password" required>
                  </div>
                  <div class="col">
                    <h5>Repetir contraseña</h5>
                    <input class="form-control" id="mostrarContrasena" name="Regis-contraseña" type="password" required>
                  </div>
                  <div clas="mostrarContrasena">
                     <p><input class="verPass" type="checkbox" >Mostrar contraseña<p>
                  </div>
                </section>

                <button class="regis-btn" name="registrarse" href="sing-in.php" type="submit">Registrarse</button>
            </form>
            <a class="link-login" href="login.php"><p class="toggle-form" onclick="toggleForm('login-form')">¿Ya tienes cuenta? Inicia sesión</p></a>
        </div>
    </section>
  <script src="../js/verPass.js"></script>
</body>
