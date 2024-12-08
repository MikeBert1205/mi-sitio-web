<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilosCer.css" />
  <link rel="stylesheet" href="estilosGenerales.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <title>Recycling Center</title>
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
  
  <div class="gradient-div">
    <div class="banner-text-header">
      <h3>Calculadora Ecologica de Reciclaje</h3>
    </div>
  </div>

  <div class="container queEsCER">
    <div class="row">
      <!-- Lado derecho con gráficos -->
      <div id="preview" class="col-md-6 ocultar-s custom-bg d-flex flex-column align-items-center justify-content-center text-center py-5">
        <h1 id="texto" class="custom-text verdeClaro">CER</h1>
        <p id="texto2" class="custom-text verde">Utiliza la Calculadora Ecologica de Reciclaje</p>
        <p id="texto2" class="custom-text">CER, es una calculadora ecológica que te ayudara a medir al reciclaje de  envases y empaques que separas.</p>
      </div>
      <!-- Lado izquierdo con fondo personalizado -->
      <div class="col-md-6 custom-bg d-flex flex-column align-items-center justify-content-center text-center py-5">
        <div id="eliminarcontenedor">
          <img id="eliminar2" class="imgCER" src="./imagenes/Ellipse 9.png" alt="">
        </div>
      </div>
    </div>
  </div>
  
  <div class="containercustom m-9">
    <form action="" method="post">
      <div class="input-group">
        <div class="form-floating mb-3 container-input-text nombre">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
          <label for="nombre">Nombre</label>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text material-Pet2 material2" id="basic-addon1"></span>
        </div>
        <div class="form-floating mb-3 container-input-text">
          <input type="number" class="form-control" id="pet" name="pet" placeholder="1" required>
          <label for="pet">PET</label>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text material-Ped2 material2" id="basic-addon1"></span>
        </div>
        <div class="form-floating mb-3 container-input-text">
          <input type="number" class="form-control" id="pead" name="pead" placeholder="1" required>
          <label for="pead">PEAD</label>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text material-Carton2 material2" id="basic-addon1"></span>
        </div>
        <div class="form-floating mb-3 container-input-text">
          <input type="number" class="form-control" id="carton" name="carton" placeholder="1" required>
          <label for="carton">Cartón</label>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text material-Vidrio2 material2" id="basic-addon1"></span>
        </div>
        <div class="form-floating mb-3 container-input-text">
          <input type="number" class="form-control" id="vidrio" name="vidrio" placeholder="1" required>
          <label for="vidrio">Vidrio</label>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text material-Aluminio2 material2" id="basic-addon1"></span>
        </div>
        <div class="form-floating mb-3 container-input-text">
          <input type="number" class="form-control" id="aluminio" name="aluminio" placeholder="1" required>
          <label for="aluminio">Aluminio</label>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text material-Hojalata2 material2" id="basic-addon1"></span>
        </div>
        <div class="form-floating mb-3 container-input-text">
          <input type="number" class="form-control" id="hojalata" name="hojalata" placeholder="1" required>
          <label for="hojalata">Hojalata</label>
        </div>
      </div>
      <div class="row justify-content-between">
        <div class="col-4 mx-3">
          <button type="submit" class="btn btn-success">Registrar</button>
        </div>
        <div class="col-4 mx-3">
          <button type="button" class="btn btn-outline-success" onclick="clearForm()">Cancelar</button>
        </div>
      </div>
    </form>
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar y asegurar que los datos son numéricos
    // aqui se rescatan los datos que se cargan desde la estructura de html
    $nombre = htmlspecialchars($_POST['nombre']);
    $pet = is_numeric($_POST['pet']) ? (float)$_POST['pet'] : 0;
    $pead = is_numeric($_POST['pead']) ? (float)$_POST['pead'] : 0;
    $carton = is_numeric($_POST['carton']) ? (float)$_POST['carton'] : 0;
    $vidrio = is_numeric($_POST['vidrio']) ? (float)$_POST['vidrio'] : 0;
    $aluminio = is_numeric($_POST['aluminio']) ? (float)$_POST['aluminio'] : 0;
    $hojalata = is_numeric($_POST['hojalata']) ? (float)$_POST['hojalata'] : 0;
    
    //por orden aqui coloquen las formulas que vayan a utilizar
    $totalKGs = $pet + $pead + $carton + $vidrio + $aluminio + $hojalata;

    // aqui es donde pueden colocar la logica de peticiones al servidor/base de datos


    //carga de fragmento html a traves de php
    echo '
      <div class="container">
      <div class="materials mx-4 mt-5">
        <h2 class="alert-heading mx-4 mt-5">Felicidades ' . $nombre . '!!!</h2>
        <h4 class="mx-4">Por tu compromiso con el medio ambiente</h4>
        <div class="materials-list">
          <div class="material" style="height: 250px;">
            <p>PET</p>
            <span class="material-Pet2 material3"></span>
            <p>PET: ' . $pet . ' kg</p>
          </div>
          <div class="material" style="height: 250px;">
            <p>PEAD</p>
            <span class="material-Ped2 material3"></span>
            <p>PEAD: ' . $pead . ' kg</p>
          </div>
          <div class="material" style="height: 250px;">
            <p>Cartón</p>
            <span class="material-Carton2 material3"></span>
            <p>Cartón: ' . $carton . ' kg</p>
          </div>
          <div class="material" style="height: 250px;">
            <p>Vidrio</p>
            <span class="material-Vidrio2 material3"></span>
            <p>Vidrio: ' . $vidrio . ' kg</p>
          </div>
          <div class="material" style="height: 250px;">
            <p>Aluminio</p>
            <span class="material-Aluminio2 material3"></span>
            <p>Aluminio: ' . $aluminio . ' kg</p>
          </div>
          <div class="material" style="height: 250px;">
            <p>Hojalata</p>
            <span class="material-Hojalata2 material3"></span>
            <p>Hojalata: ' . $hojalata . ' kg</p>
          </div>
        </div>
      </div>
    </div>
      <div class="benefits">
        <p class="acciones-sub">
          <strong class="verde">Beneficios medioambientales</strong>
        </p>
        <p class="acciones-sub">
          <strong>
            Tus ' . $totalKGs . ' kg de residuos de envases y empaques separados y reciclados generan los
            siguientes beneficios medioambientales: 
          </strong>
        </p>
        <div class="acciones">
          <div class="acciones-imagenes borde">
            <img src="imagenes/image 24.png" alt="">
            <p><strong>Separa adecuadamente los residuos que generas en tu hogar para entregarlos al camión recolector de tu colonia</strong></p>
          </div>
          <div class="acciones-imagenes borde">
            <img src="imagenes/image 25.png" alt="">
            <p><strong>Evita la emisión de ' . $totalKGs . ' kg de CO2 (gas de efecto invernadero) a la atmósfera, lo que contribuye a combatir el cambio climático global</strong></p>
          </div>
          <div class="acciones-imagenes borde">
            <img src="imagenes/image 26.png" alt="">
            <p><strong>Arregla tus aparatos eléctricos y electrodomésticos</strong></p>
          </div>
        </div>
      </div>';
  }?>

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

  <script>
function clearForm() {
    document.getElementById('dataForm').reset();
}
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>