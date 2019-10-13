<?php

$host="localhost";
$user="root";
$contra="";
$db="base";

$conectar=mysqli_connect($host,$user,$contra,$db);
if($_POST){
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    $insertar="INSERT INTO usuarios2(usuario,contrasena) VALUES ('$usuario','$contrasena')";
    $query=mysqli_query($conectar,$insertar);
    

    if($query){ 
   
        echo "<script> alert('Te has logeado correctamente..');
         location.href = 'Proyecto2.php';
        </script>";
     
     }else{
         echo "<script> alert('Logeo incorrecto');
         location.href = 'Proyecto2.php';
         </script>";
     }

}

?>