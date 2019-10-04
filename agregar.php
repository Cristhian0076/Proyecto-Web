<?php
require 'conexion.php';

    $nombre  = $_POST['nombre'];
    $usuario  = $_POST['usuario'];
    $contrasena =$_POST['contrasena'];
    $direccion =$_POST['direccion'];
    $edad =$_POST['edad'];
    $genero =$_POST['genero'];


    echo("$usuario y $contrasena");
   
   $insertar = "INSERT INTO usuarios2 VALUES (null, '$nombre', '$usuario', '$contrasena', '$direccion', '$edad', '$genero')";
   
   $query = mysqli_query($conectar, $insertar);
   
   if($query){ 
   
      echo "<script> alert('registro correcto');
       location.href = 'lista.php';
      </script>";
   
   }else{
       echo "<script> alert('registro incorrecto');
       location.href = 'lista.php';
       </script>";
   }
   




?>