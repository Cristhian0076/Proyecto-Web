<?php

$host="localhost";
$user="root";
$contra="";
$db="base";

$conectar=mysqli_connect($host,$user,$contra,$db);
if($_POST){
    $correo=$_POST['correo'];
    $pregunta=$_POST['pregunta'];
    $insertar="INSERT INTO usuarios(correo,pregunta) VALUES ('$correo','$pregunta')";
    $query=mysqli_query($conectar,$insertar);
    

    if($query){ 
   
        echo "<script> alert('Se ha enviado tu pregunta correctamente..');
         location.href = 'Proyecto2.php';
        </script>";
     
     }else{
         echo "<script> alert('No se ha enviado tu pregunta');
         location.href = 'Proyecto2.php';
         </script>";
     }

}

?>