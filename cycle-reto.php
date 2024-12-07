<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilosEco-Reto.css" />
  <link rel="stylesheet" href="estilosGenerales.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <title>Cyclo-Reto</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-success" href="index.php" style="font-weight: bold">
        <img src="./imagenes/logo-recycling.png" alt="Bootstrap" class="img-logo">
        Recycling Center
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="Principio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="Reciclaje-Envase.php">Reciclaje</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="CER.php">CER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="Comunicacion.php">Comunicación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="informacionTecnica.php">Inf. Tecnica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="cycle-reto.php">Cycle-Reto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="AcercaDe.php">Acerca de</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="header">
    <h1 class="header-text">¡Bienvenido a Cycle-Reto!</h1>
  </div>

  <div class="header-subcontainer">
    <h3 class="header-subtext">¡Únete a nosotros en la misión de proteger nuestro planeta!</h3>
  </div>

  <div class="contenedorP">
    <div class="benefit-subtext">
      <b>
        <strong class="verde">Cycle-reto </strong>
        es una plataforma gratuita sobre educación ambiental en línea,
        dirigida al público en general, con la finalidad de promover el desarrollo sustentable. En ella abordamos
        macrotemas, donde encontrarás múltiples herramientas y actividades.
      </b>
      <br><br><br><br>
      <div class="benefit-subtext2">
        <b>¿Te gustaría poder formar, orientar y enseñar sobre la preservación del medio ambiente?</b>
        <br><br><br>
      </div>
      <div class="boton-conf">
        <button class="boton" onclick="window.location.href='bienvenida.php'">Comienza ahora</button>
      </div>
    </div>

    <div class="contenedorimg">
      <div class="fondo-img">
        <img class="img-color" src="imagenes/image 28.png" alt="Reciclaje">
      </div>
    </div>
  </div>

  <div class="header-subcontainer">
    <h1 class="header-subtext2">Macrotemas</h1>
  </div>

  <div class="contenedorP">
    <div class="benefit-subtext3">
      <ul>
        <b>
        <li>Sustentabilidad y residuos</li>
        <li>Cambio climatico</li>
        <li>Conservacion de suelos y reforestaciones</li>
        <li>Huerto urbano</li>
        </b>
      </ul>
    </div>

    <div class="contenedorimg2">
      <img class="img-color2" src="imagenes/image 29.png" alt="Reciclaje">
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
</body>

</html>