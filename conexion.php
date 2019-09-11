<?php

    function conectar(){
        $host="localhost";
        $user="root";
        $contra="";
        $db="base"

        $conectar=mysqli_connect($host,$user,$contra);
        mysqli_select_db($conectar,$db);
        return $conectar;




    }