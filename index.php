<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Inicio</title>
</head>

<body>

    <?php
    require 'DB/config.php';
    include 'funciones/validarUsuario.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-5">
                <form method="POST">
                    <div class="mb-3">
                        <label for="usuarioInputEmail1" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuarioInputEmail1" aria-describedby="usuarioHelp" id="usuario" name="usuario">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary " name="iniciarSession">Iniciar Sesión</button>
                    <a href="registro.php"> <button type="button" class="btn btn-warning" name="iniciarSession">Registrarme</button></a>
                </form>
            </div>
            <?php

            if (isset($_POST['iniciarSession'])) {

                if (validarUsuario($db, $_POST['usuario'], $_POST['password'])) {
                    session_start();
                    $_SESSION['usuario'] = $_POST['usuario'];
                    header("Location:Usuarios.php");
                } else {
                    header("Location:index.php");
                }
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>