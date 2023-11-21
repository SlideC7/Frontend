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
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="crud/l.php" method="post" class="sign-in-form">
                    <h2 class="title">Inicio de sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de usuario" name="nombreAdministrador" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="password" />
                    </div>

                    <input type="submit" value="Iniciar sesión" class="btn solid" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Bienvenido de vuelta administrador</h3>
                    <p>
                        ¡Inicia sesión como administrador y accede a la información
                        necesaria para poder visualizar, administrar o editar
                        los eventos registrados en el servidor!
                    </p>
                    <a href="index.php">
                        <button class="btn transparent" id="sign-up-btn">
                            ¿No eres un admin?
                        </button>
                    </a>
                </div>
                <img src="resources/img/log.svg" class="image" alt="" />
            </div>
        </div>
    </div>


</body>

</html>