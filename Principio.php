<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilosIndex.css" />
  <link rel="stylesheet" href="estilosGenerales.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <title>Recycling Center</title>
  <style>
    #texto2 {
    font-weight: 500;
    color: black;
    font-style: normal;
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-success" href="index.php" style="font-weight: bold">
        <img src="imagenes/logo-recycling.png" alt="Bootstrap" class="img-logo">
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

  <header class="header">
    <div class="content centrar">
      <div class="banner-text-header">
        <h3>RECYCLING CENTER</h3>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="section">
      <p class="fs-4 p-3 mt-5 text-center">
        <strong class="text-focus">Reciclyng</strong> center
        <strong class="text-focus">concientiza</strong> individual y
        colectivamente a la <strong class="text-focus">sociedad</strong>
      </p>

      <h2 class="text-center fw-bolder mt-5">¿Por qué reciclar los envases?</h2>
      <p class="text-hacemos">
        Hoy en día, el reciclaje es la opción mas viable para evitar que los residuos de nuestros envases y empaques
        lleguen al medio ambiente. Pero ademas, tiene muchos otros beneficios:
      </p>
    </div>

    <div class="steps">
      <div class="step">
        <div class="step-icon">
          <img src="imagenes/Imagen1.png" alt="Icono 1" class="icon-step" style="background-size: cover;" />
          <!-- Replace with your icon path -->
        </div>
        <h3>Al aprovechar los materiales que ya tenemos, contribuye a disminuir la extraccion de nuevos recursos
          naturales del planeta.</h3>
      </div>
      <div class="step">
        <div class="step-icon">
          <img src="imagenes/Gota.png" alt="Icono 2" class="icon-step" />
          <!-- Replace with your icon path -->
        </div>
        <h3>Ahorra agua y energia tanto en el proceso de extraccion de recursos naturales, como durante la fabricación
          de nuevos productos.</h3>
      </div>
      <div class="step">
        <div class="step-icon">
          <img src="imagenes/EmpleoVerde.png" alt="Icono 3" class="icon-step" />
          <!-- Replace with your icon path -->
        </div>
        <h3>Genera nuevos empleos en la industria del reciclaje.</h3>
      </div>
    </div>

    <div class="section">
      <h2 class="text-center fw-bolder mt-5">¿Cómo reciclar?</h2>
      <p class="text-hacemos">
        Acciones fáciles y sencillas para reciclar en casa
      </p>
    </div>

    <div class="steps">
      <div class="step">
        <div class="step-icon">
          <img src="imagenes/11148136.png" alt="Icono 1" class="icon-step" />
          <!-- Replace with your icon path -->
        </div>
        <h3>Compra de manera consciente.</h3>
      </div>
      <div class="step">
        <div class="step-icon">
          <img src="imagenes/Recipiente.png " alt="Icono 2" class="icon-step" />
          <!-- Replace with your icon path -->
        </div>
        <h3>Instala recipientes específicos donde puedas dividir la basura: orgánica, vidrio, cartón, plásticos y
          residuos tóxicos.</h3>
      </div>
      <div class="step">
        <div class="step-icon">
          <img src="imagenes/icon-planta.png" alt="Icono 3" class="icon-step" />
          <!-- Replace with your icon path -->
        </div>
        <h3>Separa correctamente los residuos e indica al recolector de basura como están clasificados.</h3>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- Lado izquierdo con fondo personalizado -->
      <div class="col-md-6 custom-bg d-flex flex-column align-items-center justify-content-center text-center py-5">
        <h1 id="texto" class="custom-text ocultar">Prueba la CER</h1>
        <p id="texto2" class="custom-text ocultar">Utiliza la Calculadora Ecologica de Reciclaje</p>
        <div id="eliminarcontenedor" href="CER.php" class="btn">
          <img id="eliminar2" class="imgCER" src="imagenes/iphone.png" alt="">
        </div>
      </div>
      <!-- Lado derecho con gráficos -->
      <div id="preview" class="col-md-6 ocultar-s">
        <h1 id="texto" class="custom-text">Prueba la CER</h1>
        <p id="texto2" class="custom-text">Utiliza la Calculadora Ecologica de Reciclaje</p>
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
</body>

</html>