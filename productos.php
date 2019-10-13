<?php

$host = "localhost";
$user = "root";
$contra = "";
$bd  = "base";

$conectar=mysqli_connect($host,$user,$contra,$bd);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon"  href="img/icono.png">
    <title>Servi Gas</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="text-primary" href="Proyecto2.php">ServiGas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Proyecto2.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Quienessomos.php">Quienes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactenos.php">Contactenos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista.php">Lista Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulario.php">Preguntar</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<table class="table">
  <thead>

    <tr><br>
      <th scope="col">ID</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Codigo</th>
      <th scope="col">Precio</th>
    </tr>

<?php
$sql="SELECT * FROM producto";
$result=mysqli_query($conectar,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>

  </thead>
  <tbody>
    <tr>
      <td><?php echo $mostrar['id']?></td>
      <td><?php echo $mostrar['nombre']?></td>
      <td><?php echo $mostrar['codigo']?></td>
      <td><?php echo $mostrar['precio']?></td>
      <td>
      </td>
    </tr>
<?php
}

?>
      
</div>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
