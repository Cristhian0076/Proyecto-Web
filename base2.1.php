<?php

include("conexion.php");
if($_POST){
    $correo=$_POST['correo'];
    $pregunta=$_POST['pregunta'];
    $con=conectar();
    $insertar="INSERT INTO usuarios(correo,pregunta) VALUES ('$correo','$pregunta')";
    $query=mysqli_query($con,$insertar);
    header("location:Proyecto2.php");



}

?>