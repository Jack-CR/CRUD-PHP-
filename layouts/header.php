<?php
    include 'funciones/cerrarSession.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Bienvenido <?php echo $_SESSION['usuario'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Usuarios.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="InsertarProductos.php">Insertar Productos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
      <button class="btn btn-danger my-2 my-sm-0" type="submit" name="cerrarSession">Cerrar Sessión</button>
    </form>

    <form action="busqueda.php" class="d-flex ms-5" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="buscar">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    <?php
        if(isset($_POST['cerrarSession'])){
            cerrarSession($_POST['cerrarSession']);
        }

    ?>
  </div>
</nav>