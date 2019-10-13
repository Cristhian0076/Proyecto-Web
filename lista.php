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
    </div>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon"  href="img/icono.png">
    <title>ServiGas del Huila</title>
    
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
<div class="col-12 col-md-4 col-lg">
<a>Lista de productos: </a>
<br><br>
      <button type="button" class="btn btn-info right" data-toggle="modal" data-target="#agregar">
         Agregar producto
      </button><br>
</a>
</div>
<div class="col-12 col-md-12 col-lg">
<table class="table">
  <thead>

    <tr><br>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Codigo</th>
      <th scope="col">Precio</th>

    </tr>

<?php
$sql="SELECT * FROM producto
ORDER BY id ASC;";
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
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar">
         Editar
      </button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar<?php echo $mostrar['id']?>">
         Eliminar
      </button>
      </td>
    </tr>


    
<!-- Modal eliminar -->
<div class="modal fade" id="eliminar<?php echo $mostrar['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Esta seguro que desea eliminar los datos de:  <?php echo $mostrar['nombre'];?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <a href="eliminar.php?ID=<?php echo $mostrar['id']?>" class="btn btn-danger">Confirmar</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar-->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editar.php" name="form-work" method="post">
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Nombre</h5></label>
                  <input type="text" class="form-control"  
                    name="nombre" value="<?php echo $mostrar['nombre']?>"
                  aria-describedby="emailHelp" >
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Codigo</h5></label>
                  <input type="text" class="form-control"  
                    name="codigo"  value="<?php echo $mostrar['codigo']?>"
                   >
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Precio</h5></label>
                  <input type="text" class="form-control"  
                    name="precio"  value="<?php echo $mostrar['precio']?>"
                  aria-describedby="emailHelp">
              </div>
              <input type="hidden" name="id" value=" <?php echo $mostrar['id']?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <button type="submit" href="editar.php?ID=<?php echo $mostrar['id']?>" class="btn btn-success">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php

}

?>    





  </tbody>

</table>
</div>
<!-- Modal agregar-->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="agregar.php" name="form-work" method="post">
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Nombre</h5></label>
                  <input type="text" class="form-control"  
                    name="nombre"
                  aria-describedby="emailHelp">
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Codigo</h5></label>
                  <input type="text" class="form-control"  
                    name="codigo"
                  aria-describedby="emailHelp" >
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Precio</h5></label>
                  <input type="text" class="form-control"  
                    name="precio"
                   >
              </div>
      </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
              </div>
        </form>
     
    </div>
  </div>
</div>
  </tbody>
</table>   
</div>
 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>