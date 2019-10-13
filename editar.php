<?php
require 'conexion.php';

    $nombre  = $_POST['nombre'];
    $codigo  = $_POST['codigo'];
    $precio =$_POST['precio'];
    $id=$_POST['id'];


   $insertar = "UPDATE producto SET id='',nombre='$nombre',codigo='$codigo',
   precio='$precio'
   WHERE id= '$id'; ";
   
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