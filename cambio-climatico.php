<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilosClimatico.css" />
  <link rel="stylesheet" href="estilosGenerales.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <title>Recycling Center</title>
</head>
<style>
  .boton {
    background-color: #37be79; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 30px;
  }
  .boton:hover {
    background-color: #15883c; /* Cambia el color al pasar el ratón */
  }
</style>

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

  <header class="header">
    <div class="content centrar">
      <div class="banner-text-header">
        <h3>Cambio Climatico</h3>
      </div>
    </div>
  </header>

  <div class="container">

    <div class="row">
        <div class="col-md-6 justify-content-center align-items-center align-self-center">
            <h4>Desafíate a ti y a las personas a Apagar las Luces</h4>
        </div>
        <div class="col-md-6">
            <img src="imagenes/apagador.png" alt="Cambio Climatico" class="img-fluid object-fit-cover">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h6 class="texto text-center">¡Vamos, intenta lograr una semana Apagando las Luces de tu hogar!</h6>
            <div class="col-md-12 text-center">
                <img src="./imagenes/foco.jpg" alt="Cambio Climatico" class="img-fluid"/>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="subtitulo">
                Objetivo
            </div>
            <p class="p-2 mt-4 text-left">
                <strong class="enfasis">Reducir el Consumo de Energía:</strong> Minimizar el uso de energía eléctrica para disminuir la huella de carbono y contribuir a la lucha contra el cambio climático.<br>
                <strong class="enfasis">Fomentar la Conciencia Ambiental:</strong> Crear un hábito de apagar las luces cuando no son necesarias, fomentando la responsabilidad individual y comunitaria hacia el uso eficiente de la energía.<br>
                <strong class="enfasis">Ahorrar en Costos Energéticos:</strong> Reducir la factura de electricidad mediante el uso racional de la energía, beneficiando tanto al medio ambiente como a la economía familiar o empresarial.<br>
                <strong class="enfasis">Promover la Sustentabilidad:</strong> Impulsar prácticas sostenibles en el hogar, la escuela, o el lugar de trabajo, que puedan replicarse en otros aspectos de la vida cotidiana.
            </p>
        </div>
        <div class="col-md-6 text-center">
            <img src="./imagenes/foco-planeta.jpg" alt="Cambio Climatico" class="img-fluid"/>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <span></span>
        </div>
        <div class="col-md-6">
            <div class="subtitulo">
                Paso n.1
            </div>
            <p class="p-2 mt-4 text-left">
                <strong class="enfasis">Planificar el Reto:</strong> el uso de energía eléctrica para disminuir la huella de carbono y contribuir a la lucha contra el cambio climático.
            </p>
            <ul>
            <li>Elige una fecha de inicio y duración del reto, como un día, una semana o un mes.</li>
            <li>Involucra a todos los miembros del hogar, compañeros de trabajo o estudiantes para asegurar la participación y el compromiso colectivo.</li>
        </ul>
        <div class="row mt-5">
          <div class="col-md-12">
            <h4>Terminar paso 1</h4>
            <form id="form1" class="upload-form" enctype="multipart/form-data">
              <button class="boton">Terminar</button>
            </form>
          </div>
        </div> 
        <br><br><br><br><br>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
          <div class="subtitulo">
            Paso n.2
          </div>
            <p class="p-2 mt-4 text-left">
                <strong class="enfasis">Identificar Áreas de Mejora:</strong> 
            </p>
            <ul>
                <li>Haz un recorrido por el hogar, oficina o escuela para identificar las áreas donde las luces permanecen encendidas innecesariamente.</li>
                <li>Considera instalar sensores de movimiento en áreas de poco tránsito para automatizar el apagado de luces.</li>
            </ul>
            <div class="row mt-5">
              <div class="col-md-12">
                <h4>Terminar paso 2</h4>
                <form id="form2" class="upload-form" enctype="multipart/form-data" action="php/uploads_php/upload_file_climatico.php" method="POST">
                  <form id="form1" class="upload-form" enctype="multipart/form-data">
                  <button class="boton">Terminar</button>
                </form>
              </div>
            </div>
            <br><br><br><br><br>
          </div>
        <div class="col-md-6 text-center">
            <img src="./imagenes/apagador-foco.jpg" alt="Cambio Climatico" class="img-fluid"/>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <img src="./imagenes/foco-apagado.jpg" alt="Cambio Climatico" class="img-fluid"/>
        </div>
        <div class="col-md-6">
            <div class="subtitulo">
                Paso n.3
            </div>
            <p class="p-2 mt-4 text-left">
                <strong class="enfasis">Establecer Normas:</strong> 
            </p>
            <ul>
                <li>Asegúrate de que todos estén informados de las reglas del reto, como apagar las luces al salir de una habitación y usar luz natural siempre que sea posible.</li>
                <li>Define horarios para el uso de iluminación artificial, especialmente en la mañana y la tarde.</li>
            </ul>
            <div class="row mt-5">
              <div class="col-md-12">
                <h4>Terminar paso 3</h4>
                <form id="form1" class="upload-form" enctype="multipart/form-data">
                <button class="boton">Terminar</button>
                </form>
              </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-6">
            <div class="subtitulo">
                Paso n.4
            </div>
            <p class="p-2 mt-4 text-left">
                <strong class="enfasis">Evaluación Inicial:</strong> 
            
                Antes de comenzar, realiza un inventario de los productos plásticos que utilizas diariamente, como bolsas, botellas, envases, utensilios desechables, etc.</p>
                <div class="row mt-5">
                  <div class="col-md-12">
                    <h4>Terminar paso 4</h4>
                    <form id="form1" class="upload-form" enctype="multipart/form-data">
                      <button class="boton">Terminar</button>
                    </form>
                  </div>
                </div>
                <br><br><br><br>
            </div>
        
        <div class="col-md-6 text-center">
            <img src="./imagenes/lamparas.jpg" alt="Cambio Climatico" class="img-fluid"/>
        </div>
    </div>
    

    <div class="row mt-5">
      <div class="col-md-6 text-center">
        <img src="./imagenes/lampara-mesa.jpg" alt="Cambio Climatico" class="img-fluid"/>
      </div>
        <div class="col-md-6">
            <div class="subtitulo">
                Paso n.5
            </div>
            <p class="p-2 mt-4 text-left">
                <strong class="enfasis">Evaluación Inicial:</strong> 
                Antes de comenzar, realiza un inventario de los productos plásticos que utilizas diariamente, como bolsas, botellas, envases, utensilios desechables, etc.
            </p>
            <div class="row mt-5">
              <div class="col-md-12">
              <h4>Terminar paso 5</h4>
              <form id="form1" class="upload-form" enctype="multipart/form-data">
                <button class="boton">Terminar</button>
              </form>
              </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>
    <div class="container">
      <h1>Subir Imágenes</h1>
      <br><br>
      <form action="php/uploads_php/upload_file_climatico.php" method="POST" enctype="multipart/form-data">
          <label for="file">Selecciona una imagen:</label>
          <input type="file" id="file" name="file" accept="image/*" required>
          <button type="submit">Subir Imagen</button>
      </form>
      <br><br><br>
    </div>

    <div class="row progress-container">
        <div class="col-md-12">
            <div class="progress">
                <div id="overall-progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
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
        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-facebook"></i></a>

        <!-- Instagram -->
        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://www.instagram.com/recy_clingcenter?utm_source=qr&igsh=MWRvbzZocTlscHg4cA==" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>

        <!-- WhatsApp -->
        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
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
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const forms = document.querySelectorAll('.upload-form');
      const progressBar = document.getElementById('overall-progress-bar');
      const finishButton = document.getElementById('finish-button');
      
      forms.forEach((form, index) => {
        form.addEventListener('submit', (event) => {
          event.preventDefault();

          updateProgress(index + 1);
        });
      });

      function updateProgress(completedForms) {
        const totalForms = forms.length;
        const progressPercentage = (completedForms / totalForms) * 100;
        progressBar.style.width = progressPercentage + '%';
        progressBar.setAttribute('aria-valuenow', progressPercentage);
        progressBar.textContent = Math.round(progressPercentage) + '%';

        if (completedForms === totalForms) {
          finishButton.style.display = 'block';
        }
      }
    });
  </script>
</body>

</html>