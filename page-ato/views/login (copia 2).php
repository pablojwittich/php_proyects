<?php include "app.php"; 
session_start();
?>
<head>
    <style>
        .container {
            background-color: #BFC0C1;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 30em;
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
            background-color: #EFEFEF;

        }
        .login-btn {
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
        .login-btn:hover {
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
        .link-regis{
          display: flex;
          justify-content: center;
          margin: 0 auto;
          margin-top: 1em;
        }
    </style>
</head>
<body>
  <section class="container">
    <section id="login-form" class="form-section active">
      <h2>Iniciar Sesión</h2>
        <section class="php">
          <?php include ("../controllers/controller-login.php"); ?>
        </section>
        <form method="post" action="">
          <h5>Email</h5>
            <input  type="text" class="input" name="Lemail">
          <h5>Contraseña</h5>
            <input type="password" id="input" class="input" name="Lpass">
            <input name="btn-login" class="login-btn" type="submit" value="Iniciar sesion">
        </form>
          <a class="link-regis" href="sign-in.php"><p class="toggle-form" onclick="toggleForm('signup-form')">¿No tienes cuenta? Regístrate</p></a>
    </section>
  </section>
</body>
