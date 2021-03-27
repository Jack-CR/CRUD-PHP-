<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Insertar Producto</title>
</head>

<body>

    <?php
    session_start();
    include 'funciones/insertarProducto.php';
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
            <div class="col-md-12">
                <h1>INSERTAR PRODUCTOS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="GET">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Codigo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="codigo_producto">

                        <label for="codigo" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre_producto">

                        <label for="codigo" class="form-label">Pais</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pais_producto">

                        <label for="codigo" class="form-label">Sección</label>
                        <select class="form-select " aria-label="Default select example" name="seccion_producto">
                            <option selected>Seleccione</option>
                            <option value="FERRETERÍA">FERRETERÍA</option>
                            <option value="CONFECCIÓN">CONFECCIÓN</option>
                            <option value="DEPORTES">DEPORTES</option>
                            <option value="CERÁMICA">CERÁMICA</option>
                        </select>

                    </div>

                    <button type="submit" class="btn btn-primary" name="guardarProducto">Guardar</button>
                </form>
                <?php
                if (isset($_GET['guardarProducto'])) {
                    if (insertarProducto($db, $_GET['codigo_producto'], $_GET['nombre_producto'], $_GET['seccion_producto'],  $_GET['pais_producto'])) {
                ?>

                        <div class="alert alert-success" role="alert">
                            Se agrego el producto correctamente..!!!
                        </div>

                    <?php
                    } else {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            No agrego el producto correctamente..!!!
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