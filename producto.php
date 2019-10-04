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
    <link rel="icon"  href="img/icono.ico">
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
        <a class="nav-link" href="formulario.php">Preguntar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista.php">Lista</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar2">Agregar</button><br>
<table class="table">
  <thead>   
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">codigo</th>
      <th scope="col">precio</th>
   
    </tr>
</thead>
<tbody>    
     <?php

     $sql="SELECT * FROM producto";
$result=mysqli_query($conectar,$sql);

while($file=mysqli_fetch_array($result)){
             ?>

   </tbody>      
       <tr>
          <td><?php echo $file['id']?></td>
          <td><?php echo $file['nombre']?></td>
          <td><?php echo $file['codigo']?></td>
          <td><?php echo $file['precio']?></td>
         
          <td><a href="" class="btn btn-danger" data-toggle="modal" data-target="#modalelimina<?php echo $file['id']?>">Eliminar</a>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="editar">Editar</button>
          <td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="modalelimina<?php echo $file['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Esta seguro de eliminar los datos de,  <?php echo $file['nombre'];?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <a href="eliminar2.php?ID=<?php echo $file['id']?>" class="btn btn-danger">Confirmar</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal editar-->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">lol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="editar.php" name="form-work" method="post">
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Nombre</h5></label>
                  <input type="text" class="form-control"  
                    name="nombre"
                  aria-describedby="emailHelp" >
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Codigo</h5></label>
                  <input type="password" class="form-control"  
                    name="codigo"
                   >
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Precio</h5></label>
                  <input type="text" class="form-control"  
                    name="precio"
                  aria-describedby="emailHelp">
              </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Confirmar</button>
      </div>
    </div>
  </div>
</div>

    </div>
        <?php
}

?>
<div class="modal fade" id="agregar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="agregar2.php" name="form-work" method="post">
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Nombre</h5></label>
                  <input type="text" class="form-control"  
                    name="nombre"
                  aria-describedby="emailHelp" >
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Codigo</h5></label>
                  <input type="text" class="form-control"  
                    name="codigo"
                   >
              </div>
              <div class="form-group" >
                  <label for="exampleInputEmail1"><h5>Precio</h5></label>
                  <input type="text" class="form-control"  
                    name="precio"
                  aria-describedby="emailHelp">
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