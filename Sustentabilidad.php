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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilosSustentabilidad.css" />
    <link rel="stylesheet" href="estilosGenerales.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
    <title>Recycling Center</title>
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
        backg
        round-color: #15883c; /* Cambia el color al pasar el ratón */
    }
    .centrado {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .card-mision h4 {
        margin-bottom: 10px;
    }

    .card-mision .boton {
        margin-top: 10px;
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

    <header class="header">
        <div class="content">
            <div class="banner-text-header">
                <h3>Sustentabilidad y residuos</h3>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="section">
            <div class="card-mision">
                <div>
                    <p class="text-mision2 fw-semiBold">
                        Desafíate a ti y a las personas a evitar el uso de 
                        <strong class="text-focus">plásticos </strong> de un solo uso, durante una semana.

                    </p>
                </div>
                <img class="botellasignal" src="./imagenes/image 51.png" alt="PET" />
            </div>
        </div>

        <div class="section">
            <h3 class="text-center fw-bold fs-1 text-focus">¡Estas listo para este gran reto, vamos por esa meta una
                semana sin plasticos!</h3>

            <img class="imagenbote" src="imagenes/image 54.png" alt="">
        </div>

        <div class="container-mision">
            <div class="card-mision">

                <div>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus"> Reducción de Residuos: </strong>
                        Disminuye la cantidad de desechos plásticos que terminen en vertederos y
                        océanos.
                    </p>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus"> Ahorro Económico: </strong>
                        A largo plazo, usar productos reutilizables puede ser más económico que
                        comprar constantemente productos desechables.
                    </p>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus"> Salud Personal: </strong>
                        Evitar plásticos, especialmente aquellos que contienen BPA y otros químicos
                        nocivos, puede tener beneficios para la salud.
                    </p>
                </div>
                <img src="./imagenes/image 50.png" alt="" />
            </div>

            <div class="card-mision">
                <div>
                    <h2 class="text-center fw-bolder mt-5 text-header-mision">
                        Paso 1
                    </h2>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus">Evaluación Inicial: </strong>
                        Antes de comenzar,
                        realiza un inventario de los productos plásticos
                        que utilizas diariamente, como bolsas, botellas,
                        envases, utensilios desechables, etc.
                    </p>
                    <div class="centrado">
                    <h4>Terminar paso 1</h4>
                    <form id="form1" class="upload-form" enctype="multipart/form-data">
                        <button class="boton">Terminar</button>
                    </form>
                    </div>
                </div>
                <img class="imagenPaso" src="./imagenes/image 51.png" alt="Paso 1" />
            </div>

            <div class="card-mision">
                <img class="imagenPaso" src="./imagenes/image 56.png" alt="Paso 2" />
                <div>
                    <h2 class="text-center fw-bolder mt-5 text-header-mision">
                        Paso 2
                    </h2>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus">Eliminación de Plásticos de Un Solo Uso: </strong>
                        Durante la semana, evita usar plásticos de un solo uso.
                        Esto incluye bolsas de plástico, botellas, pajillas y
                        envases de comida para llevar. En su lugar, utiliza
                        alternativas como bolsas de tela, botellas reutilizables
                        y contenedores de vidrio o metal.
                    </p>
                    <div class="centrado">
                    <h4>Terminar paso 2</h4>
                    <form id="form1" class="upload-form" enctype="multipart/form-data">
                        <button class="boton">Terminar</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="card-mision">
                <div>
                    <h2 class="text-center fw-bolder mt-5 text-header-mision">
                        Paso 3
                    </h2>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus">Compras a Granel: </strong>
                        Compra productos a granel para evitar
                        envases de plástico. Lleva tus propios recipientes para
                        almacenar productos como arroz, pasta, frutos secos, y especias.
                        <div class="centrado">
                        <h4>Terminar paso 3</h4>
                        <form id="form1" class="upload-form" enctype="multipart/form-data">
                            <button class="boton">Terminar</button>
                        </form>
                        </div>
                    </p>
                </div>
                <img class="imagenPaso" src="./imagenes/image 57.png" alt="Paso 3" />
            </div>

            <div class="card-mision">
                <img class="imagenPaso" src="./imagenes/image 58.png" alt="Paso 4" />
                <div>
                    <h2 class="text-center fw-bolder mt-5 text-header-mision">
                        Paso 4
                    </h2>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus"> Alternativas Sostenibles: </strong>
                        Sustituye productos de uso diario
                        hechos de plástico por alternativas sostenibles, como cepillos
                        de dientes de bambú, pañuelos de tela, y jabones en barra.
                        <div class="centrado">
                        <h4>Terminar paso 4</h4>
                        <form id="form1" class="upload-form" enctype="multipart/form-data">
                            <button class="boton">Terminar</button>
                        </form>
                        </div>
                    </p>
                </div>
            </div>

            <div class="card-mision">
                <div>
                    <h2 class="text-center fw-bolder mt-5 text-header-mision">
                        Paso 5
                    </h2>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus">Educación y Concienciación: </strong>
                        Investiga sobre el impacto del
                        plástico en el medio ambiente y comparte lo aprendido con amigos
                        y familiares. Considera la posibilidad de documentar tu experiencia
                        y los desafíos que enfrentas durante la semana.
                        <div class="centrado">
                        <h4>Terminar paso 5</h4>
                        <form id="form1" class="upload-form" enctype="multipart/form-data">
                            <button class="boton">Terminar</button>
                        </form>
                        </div>
                    </p>
                </div>
                <img class="imagenPaso" src="./imagenes/image_59.png" alt="Paso 5" />
            </div>

            <div class="card-mision">
                <img class="imagenPaso" src="./imagenes/image_60.png" alt="Paso 6" />
                <div>
                    <h2 class="text-center fw-bolder mt-5 text-header-mision">
                        Paso 6
                    </h2>
                    <p class="text-mision fw-semiBold">
                        <strong class="text-focus">Reflexión: </strong>
                        Al finalizar la semana, reflexiona
                        sobre tu experiencia y piensa en las acciones
                        que puedes continuar implementando para reducir
                        el uso de plástico a largo plazo.
                        <div class="centrado">
                        <h4>Terminar paso 6</h4>
                        <form id="form1" class="upload-form" enctype="multipart/form-data">
                            <button class="boton">Terminar</button>
                        </form>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row progress-container">
        <div class="col-md-12">
            <div class="progress">
                <div id="overall-progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <h1>Subir Imágenes</h1>
        <br><br>
        <form action="php/uploads_php/upload_file_sustentabilidad.php" method="POST" enctype="multipart/form-data">
            <label for="file">Selecciona una imagen:</label>
            <input type="file" id="file" name="file" accept="image/*" required>
            <button type="submit">Subir Imagen</button>
        </form>
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
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1"
                    href="https://www.instagram.com/recy_clingcenter?utm_source=qr&igsh=MWRvbzZocTlscHg4cA=="
                    role="button" data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>

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