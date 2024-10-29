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
        .registrarme{
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
        .link-login{
            margin-top: 1em;
            text-align: center;
        }
    </style>
</head>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Isidor_von_Sevilla.jpeg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      <h3 class="registrarme">Registrarme</h3>
        <form method="post"">
            <!-- Name -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control form-control-lg">
            </div>

            <!-- Surname -->
            <div data-mdb-input-init class="form-outline mb-4">

                <label class="form-label">Apellido</label>
                <input type="text" name="surname" class="form-control form-control-lg">
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">

                <label class="form-label" for="">Correo electronico</label>
                <input type="email" id="" class="form-control form-control-lg" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Contraseña</label>
                <input type="password" id="form1Example23" class="form-control form-control-lg" />
            </div>

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn">Registrarme</button>
            <div class="link-login">
                <p>¿Ya tienes una cuenta? <a href="{{route('login')}}">Iniciar sesión</a></p>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
