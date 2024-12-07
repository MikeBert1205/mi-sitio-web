<?php

session_start();
include('php/conexion_bd.php');

if ($_SESSION['rol'] !== 'usuario') {
    header("Location: login_usuario_bd.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosEco-Reto.css" />
    <link rel="stylesheet" href="estilosGenerales.css" />
    <link rel="stylesheet" href="estilosBienvenida.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
    <title>Eco-Reto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #038944;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }
        .navbar .user-info {
            font-size: 1rem;
        }
        .navbar .logout {
            font-size: 0.9rem;
            background-color: #444;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <h1>Cyclo-Reto</h1>
            <a href="bienvenida.php" class="logout">Regresar</a>
        </div>
        <div class="user-info">
            Bienvenido, <?php echo $_SESSION['nombre']; ?>
            <a href="php/logout.php" class="logout">Cerrar sesión</a>
        </div>
    </div>

    <div class="header">
        <h1 class="header-text">Elige el reto con el que quieres comenzar</h1>
    </div>

    <div class="header-subcontainer">
        <h3>
            No malgastes ni la cosa más pequeña creada, porque los granos de arena hacen montañas
            y los átomos, el infinito.
        </h3>
        <br><br>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/cart1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ven y ayudanos a tener un planeta mas sostenible sin tantos residuos.</p>
                        <a href="Sustentabilidad.php" class="btn btn-primary">Comienza ya</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/cart2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Empieza ya, ayudarnos a acombatir el cambio climatico. </p>
                        <a href="cambio-climatico.php" class="btn btn-primary">Comienza ya</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/cart3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Inicia con el cambio, empieza por cuidar los suelos y empezemos a
                            reforestar.</p>
                        <a href="ppp.php" class="btn btn-primary">Comienza ya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center bg-body-tertiary">
        <!-- Grid container -->
        <h2 id="texto2" class="custom-text">Contactanos</h2>
        <p id="texto2" class="custom-text">¡Estamos aquí para ayudarte y responder a tus preguntas!</p>
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://www.facebook.com/profile.php?id=61563548082469&mibextid=ZbWKwL" role="button"
                    data-mdb-ripple-color="dark"><i class="bi bi-facebook"></i></a>

                <!-- Instagram -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://www.instagram.com/recy_clingcenter?utm_source=qr&igsh=MWRvbzZocTlscHg4cA==" role="button"
                    data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>

                <!-- WhatsApp -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://chat.whatsapp.com/JcU5aFLBEC3HT05He0uZXw" role="button"
                    data-mdb-ripple-color="dark"><i class="bi bi-whatsapp"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-body" href="index.php">Recycling Center</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>