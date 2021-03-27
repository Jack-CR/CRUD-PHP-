<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Registro</title>
</head>

<body>
<?php
    include 'funciones/registrarUsuario.php';
    require 'DB/config.php';
?>

    <div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <h1>PAGINA DE REGISTRO</h1>
        </div>
    </div>
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

                    <button type="submit" class="btn btn-primary " name="registrarme">Registrarme</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <?php
                    if(isset($_POST['registrarme'])){
                        if(registroUsuario($db,$_POST['usuario'],$_POST['password'])){
                            ?>
                            <div class="alert alert-success" role="alert">
                                Te has registrado con exito..!!!
                            </div>
                            <a href="index.php"> <button type="button" class="btn btn-warning" name="iniciarSession">Regresar</button></a>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>