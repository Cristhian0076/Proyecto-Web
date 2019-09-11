<?php

    if($_POST){
        $usuario= $_POST['correo'];
    $pasword= $_POST['pass'];

    
    echo " Su usuario es: $usuario
      Su contraseña es: $pasword";
    
    }else{
        echo "No hay post";
    }  
  
?>
