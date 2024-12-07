<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asets/Estilos/estilos.css">
</head>
<body>
    <main>
        <div class="Contenedor">
            <div class="Caja-trasera">
                <div class="Caja-trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesiín para entrar en la página</p>
                    <button id="btn-iniciarsesion">Iniciar Sesión</button>
                </div>

                <div class="Caja-trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn-registrarse">Regístrarse</button>
                </div>
            </div>

            <!-- Mensajes de error o éxito -->
            <?php if (isset($_SESSION['message'])): ?>
                <div class="mensaje visible">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']); // Limpiar el mensaje después de mostrarlo
                    ?>
                </div>
            <?php endif; ?>
            
            <!-- Formmulario de login y register -->
            <div class="contenedor-loginregister">

                <!-- login -->
                <form action="php/login_usuario_bd.php" method="POST" class="formulario-login">
                    <h2>Iniciar Sesión</h2>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <button>Iniciar Sesión</button>
                </form>

                <!-- Register -->
                <form action="php/registro_usuario_bd.php" method="POST" class="formulario-register">
                    <h2>Regístrarse</h2>
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <label for="rol">Rol:</label>
                    <select id="rol" name="rol">
                        <option value="usuario">Usuario</option>
                        <option value="administrador">Administrador</option>
                    </select><br><br>
                    <!-- Campo para el código de autorización -->
                    <div id="adminCodeSection" style="display: none;">
                        <label for="admin_code">Código de Autorización:</label>
                        <input type="text" id="admin_code" name="admin_code">
                    </div>
                    <button>Regístrarse</button>
                </form>

                <script>
                    document.getElementById('rol').addEventListener('change', function () {
                        var adminCodeSection = document.getElementById('adminCodeSection');
                        if (this.value === 'administrador') {
                            adminCodeSection.style.display = 'block';
                        } else {
                            adminCodeSection.style.display = 'none';
                        }
                    });
                </script>
            </div>
        </div>
    </main>

    <script src="asets/js/script.js"></script>

</body>
</html>