<?php
require 'conexion.php';

    $nombre  = $_POST['nombre'];
    $codigo  = $_POST['codigo'];
    $precio =$_POST['precio'];


   $insertar = "INSERT INTO producto VALUES (null, '$nombre', '$codigo', '$precio')";
   
   $query = mysqli_query($conectar, $insertar);
   
   if($query){ 
   
      echo "<script> alert('registro correcto');
       location.href = 'producto.php';
      </script>";
   
   }else{
       echo "<script> alert('registro incorrecto');
       location.href = 'producto.php';
       </script>";
   }
   