<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Productos</title>
</head>

<body>
    <?php
    session_start();
    require 'DB/config.php';
    if (!isset($_SESSION['usuario'])) {
        header("Location:index.php");
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <header>
                <?php
                include_once 'layouts/header.php';
                ?>
            </header>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">CODIGO</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">SECCION</th>
                                    <th scope="col">PAIS DE ORIGEN</th>
                                    <th scope="col">Eliminar</th>
                                    <th scope="col">Modificar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $buscar = $_GET['buscar'];

                                $sql = "SELECT * FROM productos WHERE NOMBREARTÍCULO LIKE :buscar";
                                $result = $db->prepare($sql);
                                $result->bindValue(':buscar', "%{$buscar}%", PDO::PARAM_STR);
                                $result->execute();

                                while ($row = $result->fetch()):
                                ?>
                                    <tr>
                                        <td><?php echo $row['CÓDIGOARTÍCULO']; ?></td>
                                        <td><?php echo $row['NOMBREARTÍCULO']; ?></td>
                                        <td><?php echo $row['SECCIÓN']; ?></td>
                                        <td><?php echo $row['PAÍSDEORIGEN']; ?></td>
                                        <td><a class="btn btn-danger" href="eliminarProducto.php?id=<?php echo $row['CÓDIGOARTÍCULO']; ?>"><i class="bi bi-trash-fill"></i></a></td>
                                        <td><a class="btn btn-primary" href="actualizarProducto.php?id=<?php echo $row['CÓDIGOARTÍCULO']; ?>"><i class="bi bi-clipboard"></i></a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>