<?php
require 'conexion.php';

    $name =$_POST['nombre'];
    $usuario  = $_POST['usuario'];
    $contrasena  = $_POST['contrasena'];
    $direccion  = $_POST['direccion'];
    $edad =$_POST['edad'];
    $genero =$_POST['genero'];
    $id=$_POST['id'];

    echo("$usuario y $contrasena");
   
   $insertar = "UPDATE usuarios2 SET id_usuario='',nombre='name',usuario='$usuario',
   contrasena='$contrasena',direccion='$direccion',edad='$edad',genero='$genero' 
   WHERE id_usuario='$id';  ";
   
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