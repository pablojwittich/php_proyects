<?php
    include '/xampp/htdocs/cocina_modelo/model/connection.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/style.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocina Modelo</title>
</head>
<body>
    <main>
        <section class="sec1">
            <header>
                <img class="foto0" src="view/recursos/SM-logo.png"/>
                <h1>COCINA MODELO</h1>
            </header>
            <nav>
                <ul>
                    <li><?php include ('view/admission.php');?></li>
                </ul>
            </nav>
            <h2>Escane el QR</h2>
        </section>
        <section class="sec2">
            <picture class="foto1">
                <img src="view/recursos/persona.png"  alt="foto_personal"/>
            </picture>
            <form class="form1" action="contact.php" method="post" >
                 <!-- modificar para interactuar con la BD -->
                <?php include 'controller/personal.php'; ?>
            </form>
            <form class="form2">
                <!-- modificar para interactuar con la BD -->
                <?php include 'controller/procesos.php'; ?>
            </form>
        </section>

    </main>
</body>
</html>