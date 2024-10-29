<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .iniciar-sesion{
            text-align: center;
        }
        .btn{
            background-color: blue;
            padding: 0.5em 0.5em 0.5em 0.5em;
            font-size: 1.2em;
            color: white;
            display: flex;
            margin: 0 auto;
        }

     </style>
</head>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Isidor_von_Sevilla.jpeg" class="img-fluid">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h3 class="iniciar-sesion">Iniciar sessión</h3>
        <form method="post" action="{{route('login')}}">
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label">Correo electronico</label>
            <input type="email"  class="form-control form-control-lg" placeholder="ejemplo@mail.com"/>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Contraseña</label>
            <input type="password" class="form-control form-control-lg" placeholder="ejemplo123"/>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" checked/>
              <label class="form-check-label">Recordarme</label>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn">Entrar</button>

            <p>¿No tienes una cuenta? <a href="{{route('singIn')}}">Registrarte</a></p>
        </form>
      </div>
    </div>
  </div>
</section>
