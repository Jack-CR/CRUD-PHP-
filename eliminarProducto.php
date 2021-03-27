<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Eliminar Productos</title>
</head>

<body>

    <?php
    session_start();
    include 'funciones/eliminarProducto.php';
    include 'DB/config.php';
    if (!isset($_SESSION['usuario'])) {
        header("Location:index.php");
    }
    ?>

    <div class="container-fluid">
        <header>
            <?php
            include_once 'layouts/header.php';
            ?>
        </header>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                   if(!isset($_GET['id'])){
                       header("Location:usuario.php");
                   }else{
                       if(eliminarProducto($db,$_GET['id'])){
                           ?>
                           <div class="alert alert-success" role="alert">
                                Producto eliminado correctamente..!!!
                            </div>
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