<!--
    Willan Alfredo Adolfo Velasco Fernandez
    Arianne Pozo Galvis
 -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="logo.png" rel="shortcut icon" type="image/x-icon">
    <script src="https://kit.fontawesome.com/40786bfd2e.js" crossorigin="anonymous"></script>
    <link href="styles/style_inicio_sesion.css" rel="stylesheet" />
    <title>REGISTRO</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="crud/r.php" method="POST" class="sign-in-form">
                    <h2 class="title">Registro</h2>
                
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de usuario" name="nombreAdministrador" require />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" minlength="8" placeholder="Contraseña" name="password" require />
                    </div>

                    <input type="submit" class="btn" value="Registrar" />
                </form>
            </div>
        </div>

        <div class="panels-container">

            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Está por crearse un nuevo administrador?</h3>
                    <p>
                        ¡Un nuevo integrante siempre es bienvenido en el equipo,
                        la ayuda es indispensable pero recuerda que siempre es recomendado
                        tener una buena formación del manejo de los recursos!
                    </p>
                    <a href="perfil_administrador.php">
                        <button class="btn transparent" id="sign-in-btn">
                            Volver atrás
                        </button></a>
                </div>
                <img src="resources/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

</body>

</html>