@include('app')
<head>
    <style>
        nav
        {
            margin-bottom:0em;
        }

        .form-register
        {
            background-color: ##11181f;
            height:30em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ref-register
        {
            display: flex;
            justify-content: center;
            margin-top: 2em;
        }

        .txt-inicio
        {
            padding-top: 2em;
        }

        .link-register:hover
        {
            color:#467481;
        }
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <form method="post" class="form-register">
                <section class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="txt-inicio fw-bold mb-2 text-uppercase">Crear una cuenta</h2>
                    <p class="text-white-50 mb-5">Por favor ingrese todos los dato solicitado</p>

                    <!-- Nombre y Apellido -->
                    <section data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="text" id="" class="form-control form-control-lg" required/>
                        <label class="form-label" for="">Apellido y nombre</label>
                    </section>

                    <!-- Email -->
                    <section data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="email" id="typeEmailX" class="form-control form-control-lg" required/>
                        <label class="form-label" for="typeEmailX">Email</label>
                    </section>

                    <!-- Contraseña -->
                    <section data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="password" id="typePasswordX" class="form-control form-control-lg" required/>
                        <label class="form-label" for="typePasswordX">Contraseña</label>
                    </section>

                    <!-- Btn-Ingresar -->
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Registrarme</button>

                    <!-- Link registro -->
                    <section class="ref-register">
                        <p class="mb-0">Ya tienes cuenta?<br><strong><a class="link-register" href="{{route('login')}}" class="text-white-50 fw-bold">Ingresar</a></<strong>
                        </p>
                    </section>
                </section>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
