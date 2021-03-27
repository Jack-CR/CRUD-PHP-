<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Actualizar Producto</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location:index.php");
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <header>
                <?php
                include_once 'layouts/header.php';
                include_once 'DB/config.php';
                include_once 'funciones/actualizarProducto.php';

                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                }else{
                    $id=$_GET['codigo_producto'];
                }
                $sql="SELECT * FROM productos WHERE CÓDIGOARTÍCULO=:id_producto";
                $result=$db->prepare($sql);
                $result->bindParam(':id_producto',$id,PDO::PARAM_STR);
                $result->execute();
                $row=$result->fetch();
                ?>
            </header>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>ACTUALIZAR PRODUCTO</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="GET">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="codigo_producto" value="<?php echo $row['CÓDIGOARTÍCULO'];?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre_producto" value="<?php echo $row['NOMBREARTÍCULO'];?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sección</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="seccion_producto" value="<?php echo $row['SECCIÓN'];?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">País de Origen</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pais_producto" value="<?php echo $row['PAÍSDEORIGEN'];?>">
                    </div>
                
                    <button type="submit" class="btn btn-primary" name="actualizar_producto">Actualizar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                    if(isset($_GET['actualizar_producto'])){
                        if(actualizar_Producto($db,$_GET['codigo_producto'],$_GET['nombre_producto'],$_GET['seccion_producto'],$_GET['pais_producto'])){
                            ?>

                            <div class="alert alert-success" role="alert">
                                Se actualizo el producto correctamente..!!!
                            </div>

                            <?php
                           
                           header("Refresh: 1; URL=actualizarProducto.php?id=$id");   
                           
                            
                        }else{
                            ?>

                            <div class="alert alert-danger" role="alert">
                                No actualizo el producto correctamente..!!!
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