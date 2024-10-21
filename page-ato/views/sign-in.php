<?php include "app.php";

?>
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
<!--<body>
    <section class="container">
      <section class="form-section">
        <h2>Crear una cuenta</h2>
      <?php include ("../controllers/controller-sign-in.php"); ?>
        <form method="post" action="">
          <section class="row g-3">
            <div class="col">
              <h5>Nombre</h5>
              <input name="Rname" class="form-control" type="text" required>
            </div>
            <div class="col"> 
              <h5>Apellido</h5>
              <input name="Rsurname" class="form-control" type="text" required> 
            </div>
          </section>
          <section class="col">
            <h5>Correo electronico</h5>
            <input name="Remail" class="form-control" type="email" required> 
          </section>
          <section class="row g-3">
            <div class="col">
              <h5>Contraseña</h5> 
              <input name="Rpass1" class="form-control" type="password" required>
            </div>
            <div class="col">
              <h5>Repetir contraseña</h5>
              <input name="Rpass2" class="form-control" type="password" required>
            </div>
          </section>
          <button name="btn-register" class="regis-btn" type="submit">Reguistrarse</button>
        </form>
        <a class="link-login" href="login.php">
          <p class="toggle-form" onclick="toggleForm('login-form')">
              ¿Ya tienes cuenta? Inicia sessión
          </p>
        </a>
      </section>
    </section>
</body>-->

<body>
    <section class="container">
        <section class="form-section">
            <h2>Crear una cuenta</h2>
            <form method="post" action="">
                <section class="row g-3">
                    <div class="col">
                        <label for="Rname"><h5>Nombre</h5></label>
                        <input id="Rname" name="Rname" class="form-control" type="text" required>
                    </div>
                    <div class="col"> 
                        <label for="Rsurname"><h5>Apellido</h5></label>
                        <input id="Rsurname" name="Rsurname" class="form-control" type="text" required> 
                    </div>
                </section>
                <section class="col">
                    <label for="Remail"><h5>Correo electrónico</h5></label>
                    <input id="Remail" name="Remail" class="form-control" type="email" required> 
                </section>
                <section class="row g-3">
                    <div class="col">
                        <label for="Rpass1"><h5>Contraseña</h5></label> 
                        <input id="Rpass1" name="Rpass1" class="form-control" type="password" required>
                    </div>
                    <div class="col">
                        <label for="Rpass2"><h5>Repetir contraseña</h5></label>
                        <input id="Rpass2" name="Rpass2" class="form-control" type="password" required>
                    </div>
                </section>
                <button name="btn-register" class="regis-btn" type="submit">Registrarse</button>
            </form>
            <a class="link-login" href="login.php">
                <p class="toggle-form" onclick="toggleForm('login-form')">
                    ¿Ya tienes cuenta? Inicia sesión
                </p>
            </a>
        </section>
    </section>
</body>

